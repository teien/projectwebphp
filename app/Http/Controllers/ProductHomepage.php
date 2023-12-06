<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductHomepage extends Controller
{
    public function product()
    {
        $products = DB::table('product')->select('*');
        $products = $products->get();
        return view('homepage', compact('products'));
    }
}
