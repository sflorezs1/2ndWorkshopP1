<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{
    public function catalog()
    {
        $products = Product::all();
        return view('catalog.list')->with('products', $products);
    }

    public function item($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('catalog.showitem')->with('product', $product);
    }

    public static function get_featured_products()
    {
        $featured_products = Product::all()->random(10);
        return $featured_products;
    }
}
