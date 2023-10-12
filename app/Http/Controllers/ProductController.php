<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $req)
    {

        $limit = 3; //tùy chọn, số dòng/ trang
        $page = $req->page > 0 ? $req->page : 1; // trang hiện tại đang truy cập
        $offset = ($page - 1) * $limit; // số dòng bị loại bỏ

        // truy vaans cow banr
        $query = DB::table('products')
            ->select('products.*', 'categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'products.category_id');
        // neeus cos request sawps xeeps theo orrder
        $order = $req->order ? $req->order : '';
        if ($req->order) {
            $_order = explode('-', $req->order); // chuyển về mảng ['name','ASC']
            $query = $query->orderBy($_order[0], $_order[1]);
        }

        $totalRow = DB::table('products')->count('id');
        if ($req->name) {
            // nếu có thông tin name được gửi lên, tìm kiếm với LIKE
            $query = $query->where('products.name', 'LIKE', '%' . $req->name . '%');
            // Tính lại totalRow
            $totalRow = DB::table('products')->where('products.name', 'LIKE', '%' . $req->name . '%')
                ->count('id');
        }

        $products = $query->limit($limit)->offset($offset)->get(); // danh sách dữ liệu sản phẩm
        // $products = DB::table('products')
        //     ->select('products.*', 'categories.name as category_name')
        //     ->join('categories', 'categories.id', '=', 'products.category_id')
        //     ->get();
        $totalRow = DB::table('products')->count('id');
        $totalPrice = DB::table('products')->sum('price');
        $maxPrice = DB::table('products')->max('price');
        $minPrice = DB::table('products')->min('price');
        $totlPage = ceil($totalRow / $limit);
        // trả dữ liệu về cho views/product.blade.php
        return view(
            'product',
            compact('products', 'totalRow', 'totalPrice', 'maxPrice', 'minPrice', 'totlPage', 'order')
        );
    }
}
