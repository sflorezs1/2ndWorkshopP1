<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $featured_products = ProductController::get_featured_products();
        return view('home.index')->with('featured_products', $featured_products);
    }
}
