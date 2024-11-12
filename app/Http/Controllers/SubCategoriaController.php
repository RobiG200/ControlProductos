<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubCategoriaRequest;
use App\Http\Requests\UpdateSubCategoriaRequest;
use App\Repositories\SubCategoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\SubCategoria;

class SubCategoriaController extends AppBaseController
{

    public function getSubcategoriesByCategory($categoryId)
    {
        $subcategories = SubCategoria::where('category_id', $categoryId)->pluck('name', 'id');
        return response()->json($subcategories);
    }


    /** @var SubCategoriaRepository $subCategoriaRepository*/
    private $subCategoriaRepository;

    public function __construct(SubCategoriaRepository $subCategoriaRepo)
    {
        $this->subCategoriaRepository = $subCategoriaRepo;
    }

    /**
     * Display a listing of the SubCategoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       // Obtener todas las subcategorías junto con sus categorías
   
    //Obtener todas las subcategorías junto con sus categorías
    $subcategories = DB::table('subcategories')
        ->join('categories', 'subcategories.category_id', '=', 'categories.id')
        ->select('subcategories.id', 'subcategories.name', 'categories.name as category_name')
        ->where('subcategories.deleted_at', null)
        ->get();

    
    return view('sub_categorias.index')
        ->with('subCategorias', $subcategories);
    }

    /**
     * Show the form for creating a new SubCategoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('sub_categorias.create');
    }

    /**
     * Store a newly created SubCategoria in storage.
     *
     * @param CreateSubCategoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateSubCategoriaRequest $request)
    {
        $input = $request->all();

        $subCategoria = $this->subCategoriaRepository->create($input);

        Flash::success('Sub Categoria saved successfully.');

        return redirect(route('subCategorias.index'));
    }

    /**
     * Display the specified SubCategoria.
     *
     * @param int $id
     *
     * @return Response
     */
public function show($id)
{
    // Buscar la subcategoría por su ID
    $subcategory = DB::table('subcategories')
        ->join('categories', 'subcategories.category_id', '=', 'categories.id')
        ->select('subcategories.id', 'subcategories.name', 'categories.name as category_name', 'subcategories.created_at', 'subcategories.updated_at')
        ->where('subcategories.id', $id)
        ->first();

    // Verificar si la subcategoría existe
    if (empty($subcategory)) {
        // Mensaje de error (puedes manejarlo con una sesión o redirigir)
        return redirect()->route('subCategorias.index')->withErrors(['message' => 'Subcategoría no encontrada']);
    }

    // Retornar la vista con los datos de la subcategoría
    return view('sub_categorias.show')->with('subcategory', $subcategory);
}
    /**
     * Show the form for editing the specified SubCategoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);

        if (empty($subCategoria)) {
            Flash::error('Sub Categoria not found');

            return redirect(route('subCategorias.index'));
        }

        return view('sub_categorias.edit')->with('subCategoria', $subCategoria);
    }

    /**
     * Update the specified SubCategoria in storage.
     *
     * @param int $id
     * @param UpdateSubCategoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubCategoriaRequest $request)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);

        if (empty($subCategoria)) {
            Flash::error('Sub Categoria not found');

            return redirect(route('subCategorias.index'));
        }

        $subCategoria = $this->subCategoriaRepository->update($request->all(), $id);

        Flash::success('Sub Categoria updated successfully.');

        return redirect(route('subCategorias.index'));
    }

    /**
     * Remove the specified SubCategoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subCategoria = $this->subCategoriaRepository->find($id);

        if (empty($subCategoria)) {
            Flash::error('Sub Categoria not found');

            return redirect(route('subCategorias.index'));
        }

        $this->subCategoriaRepository->delete($id);

        Flash::success('Sub Categoria deleted successfully.');

        return redirect(route('subCategorias.index'));
    }
}
