<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function db() {
        return [
            'products' => [
                '1' => [
                    'title'=>'orange',
                    'image_url' =>'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
                ],
                '2' => [
                    'title'=>'apple',
                    'image_url'=>
                        'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
                ],
                '3' => [
                    'title'=>'banana',
                    'image_url'=>
                        'https://i.pinimg.com/originals/72/f6/fe/72f6fe384180442d9cd835abd4e021d9.jpg',
                ]
            ]
        ];
    }
    public function show() {
        return view('products.home_products', [
            "products" => $this->db()['products'],
            "ids" => array_keys($this->db()['products']),
        ]);
    }

    public function showProduct($id) {
        return view("products.product.home_product", [
            "products" => $this->db()['products'],
            "product" => $this->db()['products']["$id"],
            "ids" => array_keys($this->db()['products']),
            "id" => $id,
        ]);
    }
}
