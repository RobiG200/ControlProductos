<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use App\Repositories\productoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\categoria;
use app\Models\SubCategoria;

class productoController extends AppBaseController
{
    /** @var productoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(productoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the producto.
     *
     * @param Request $request
     *
     * @return Response
     */


public function index(Request $request)
{
    // Obtener los productos junto con sus categorías
    $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id') // Solo se une a la tabla de categorías
        ->select(
            'products.id', 
            'products.name as product_name', 
            'products.code',       
            'products.stock',       
            'products.price',       
            'products.image',       
            'categories.name as category_name'
        )
        ->whereNull('products.deleted_at') // Filtrar los productos que no están eliminados
        ->get();

    return view('productos.index')->with('products', $products);
}
    /**
     * Show the form for creating a new producto.
     *
     * @return Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created producto in storage.
     *
     * @param CreateproductoRequest $request
     *
     * @return Response
     */
    public function store(CreateproductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified producto.
     *
     * @param int $id
     *
     * @return Response
     */
public function show($id)
{
    $producto = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id') // Solo se une a la tabla de categorías
        ->select(
            'products.id', 
            'products.name as product_name', 
            'products.code', 
            'products.stock', 
            'products.price', 
            'products.image', 
            'categories.name as category_name',
            'products.created_at',
            'products.updated_at',
            'products.created_by',
            'products.modified_by'
        )
        ->where('products.id', $id)
        ->whereNull('products.deleted_at')
        ->first();

    if (empty($producto)) {
        Flash::error('Producto not found');
        return redirect(route('productos.index'));
    }

    return view('productos.show')->with('producto', $producto);
}

    /**
     * Show the form for editing the specified producto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified producto in storage.
     *
     * @param int $id
     * @param UpdateproductoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified producto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }
}
