<?php


namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function productList()
    {
        return view('ProductList');
    }

    public function show($id)
    {
        return view('ProductDetails', ['id' => $id]);
    }
}
