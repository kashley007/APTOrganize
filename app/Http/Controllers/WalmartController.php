<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalmartController extends Controller
{
    public function index()
    {
        return view('walmartHome');
    }

    public function search()
    {
        return view('walmartSearch');
    }
}
