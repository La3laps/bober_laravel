<?php


namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function productList()
    {
        return view('ProductList');
    }
}
