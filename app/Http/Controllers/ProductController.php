<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\caterories;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $catalogId = $request->query('catalog');
        $catalog = null;
        if($catalogId){
            $catalog = caterories::find($catalogId);
        }
        $products = null;
        if($catalogId){
            $products = Product::where('catalog_id', $catalogId)->get();
        }
        // Lấy giá trị từ form
        $genderFilter = $request->input('filter_gioi-tinh');
        $priceFilter = $request->input('filter_khoang-gia');

        // Bắt đầu với query cơ bản
        $products = DB::table('products')->select('*');

        // Áp dụng bộ lọc nếu có
        if ($genderFilter) {
            $products->where('sex', $genderFilter);
        }

        if ($priceFilter) {
            // Chia khoảng giá thành mảng min và max
            $priceRange = explode('-', $priceFilter);

            // Áp dụng điều kiện cho khoảng giá
            $products->whereBetween('price', [$priceRange[0], $priceRange[1]]);
        }

        // Lấy kết quả
        $products = $products->get();

        return view('/product', compact('products', 'catalog'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::query()
        ->where('name','LIKE',"%{$search}%")
        ->get();
        return view('product',compact('products'));
    }

    public function search2(Request $request)
{
    $searchTerm = $request->input('search2');
    $orderBy = $request->input('orderby', 'price');
    $orderDirection = $orderBy === 'price-desc' ? 'desc' : 'asc';

    $products = Product::where('name', 'like', '%' . $searchTerm . '%')
        ->orderByPrice($orderDirection)
        ->get();

    // Trả về view cùng với giá trị tìm kiếm và các giá trị khác
    return view('product', compact('products', 'searchTerm', 'orderBy'));


}

// public function show($id)
//     {
//         // Lấy danh sách sản phẩm theo hãng bằng Query Builder
//         $products = DB::table('products')->where('brand', $brand)->get();

//         return view('product.index', compact('brand', 'products'));
//     }
}
