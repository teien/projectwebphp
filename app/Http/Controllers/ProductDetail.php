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
    public function productDetail($productId)
{
    // Lấy thông tin sản phẩm chính
    $mainProduct = Product::find($productId);

    // Lấy danh sách sản phẩm liên quan (ví dụ lấy 4 sản phẩm)
    $relatedProducts = Product::where('catalog_id', $mainProduct->catalog_id)
        ->where('id', '<>', $mainProduct->id)
        ->take(4)
        ->get();

    return view('product_detail', compact('mainProduct', 'relatedProducts'));
}


   
}
