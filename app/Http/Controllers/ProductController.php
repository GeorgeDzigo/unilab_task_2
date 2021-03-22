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
        ]);
    }

    public function showProduct($id) {
        $product = collect($this->db()['products'])->filter(function($x) use($id) {return $x["title"] == $id ? $x : "";})->flatMap(function($x) {return $x;});
        if($product->count() == 0) abort(404);

        return view("products.product.home_product", [
            "products" => $this->db()['products'],
            "product" => $product,
        ]);
    }
}
