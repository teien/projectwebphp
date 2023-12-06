<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function product()
    {
        $products = DB::table('product')->select('*');
        $products = $products->get();
        return view('product', compact('products'));
    }
}
