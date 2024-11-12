<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductReportRequest;
use App\Http\Requests\UpdateproductReportRequest;
use App\Repositories\productReportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class productReportController extends AppBaseController
{
    /** @var productReportRepository $productReportRepository*/
    private $productReportRepository;

    public function __construct(productReportRepository $productReportRepo)
    {
        $this->productReportRepository = $productReportRepo;
    }

    /**
     * Display a listing of the productReport.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {
   
    $productReports = DB::table('product_report')->get();

    return view('product_reports.index', compact('productReports'));
    }

    /**
y the specified productReport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productReport = $this->productReportRepository->find($id);

        if (empty($productReport)) {
            Flash::error('Product Report not found');

            return redirect(route('productReports.index'));
        }

        return view('product_reports.show')->with('productReport', $productReport);
    }

  
}


