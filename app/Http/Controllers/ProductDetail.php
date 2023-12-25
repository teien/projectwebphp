<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductDetail extends Controller
{
    public function show(string $id)
    {
        $products = Product::where('id', '=', $id)->select('*')->first();
        return view('product_detail' , compact('products'));
    }

    public function index (){
        return view('product_detail');
    }


    public function store(Request $request)
    {
        $news = new Comments ;
        
        $news->comments = $request->comments;
        $news->username = $request->username;
        
        $news->save();
        return redirect()->action([ProductDetail::class,'index'])
    ;
    }

   
}
