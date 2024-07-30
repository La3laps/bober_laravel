<?php

namespace App\Http\Controllers;

class HeaderController extends Controller
{
    public function header_index()
    {
        return view('header');
    }
}
