<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function product(Request $request)
    {
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

        return view('product', compact('products'));
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
}
