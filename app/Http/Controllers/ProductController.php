<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{
    public function store()
    {
        return view('store');
    }

    public static function get_featured_products()
    {
        $featured_products = Product::all()->random(10);
        return $featured_products;
    }
}
