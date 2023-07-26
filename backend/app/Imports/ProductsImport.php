<?php

namespace App\Imports;

use App\Models\ProductsModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProductsModel([
            'category_id' => $row[0],
            'group_code' => $row[1],
            'products_code' => $row[2],
            'shop_products_code' => $row[3],
            'shop_stock_code' => $row[4],
            'catalog_id' => $row[5],
            'barkode' => $row[6],
            'products_title' => $row[7],
            'products_properties' => $row[8],
            'products_status' => $row[9],
            'shop_note' => $row[10],
            'ready_timer' => $row[11],
            'stock' => $row[12],
            'money_type' => $row[13],
            'market_selling_price' => $row[14],
            'n_selling_price' => $row[15],
            'commission' => $row[16],
            'delivery_template_name' => $row[17],
        ]);
    }

}
