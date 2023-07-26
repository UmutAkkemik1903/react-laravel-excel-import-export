<?php

namespace App\Http\Controllers\Api;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use App\Models\ProductsModel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProductsModel::get();
        return $data;
    }

    public function export(){
        return Excel::download(new ProductsExport, 'product.xlsx');
    }

    public function import(Request $request){
        Excel::import(new ProductsImport, $request->file('file'));
        return redirect()->back()->with('success', 'File imported successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
