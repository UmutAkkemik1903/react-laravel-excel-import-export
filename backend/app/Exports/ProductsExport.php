<?php

namespace App\Exports;

use App\Models\ProductsModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;

class ProductsExport implements  /*WithHeadings,*/FromCollection/*,WithEvents,*/,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductsModel::get([
            'category_id as category_id',
            'group_code as group_code',
            'products_code as products_code',
            'shop_products_code as shop_products_code',
            'shop_stock_code as shop_stock_code',
            'catalog_id as catalog_id',
            'barkode as barkode',
            'products_title as products_title',
            'products_properties as products_properties',
            'products_status as products_status',
            'shop_note as shop_note',
            'ready_timer as ready_timer',
            'stock as stock',
            'money_type as money_type',
            'market_selling_price as market_selling_price',
            'n_selling_price as n_selling_price',
            'commission as commission',
            'delivery_template_name as delivery_template_name',
        ]);
    }
   /* public function headings(): array
    {
        return [
            "Kategori ID",
            "Grup Kodu",
            "n Ürün Kodu",
            "Mağaza Ürün Kodu",
            "Mağaza Stok Kodu",
            "Katalog ID",
            "Ürün Başlığı",
            "Varyant özellik",
            "Ürün Statüsü",
            "Mağaza Notu",
            "Hazırlık Süresi",
            "Stok",
            "Para Birimi",
            "Piyasa Satış Fiyatı",
            "Satış Fiyatı",
            "Komisyon Oranı",
            "Teslimat Şablonu İsmi",
        ];
    }
   /* public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getStyle('A1:Q1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ]);
            },

        ];

    }*/
}
