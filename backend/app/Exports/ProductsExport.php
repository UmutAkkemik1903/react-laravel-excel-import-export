<?php

namespace App\Exports;

use App\Models\ProductsModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductsModel::all();
    }
}
