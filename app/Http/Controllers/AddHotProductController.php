<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
class AddHotProductController extends Controller
{
    public function index()
    {
        $data = DB::table("product")->select("*");
        $data = $data->get();
        return view('/homepage', compact('data'));
    }
    public function show($id)
    {
        $data = Product::WHERE('id', '=', $id)->select('*')->first();
        $des = html_entity_decode($data->description);
        return view('/admin/product_detail',compact('data', 'des'));
    }
}
