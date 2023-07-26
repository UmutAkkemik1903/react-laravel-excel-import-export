<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $fillable = ['category_id','group_code','products_code','shop_products_code','shop_stock_code','catalog_id','barkode','products_title','products_properties','products_status','shop_note','ready_timer','stock','money_type','market_selling_price','n_selling_price','commission','delivery_template_name'];
    protected $table = 'products';

}
