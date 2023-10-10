<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->select('products.*', 'categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->get();
        // dd ($products);
        return view('product', compact('products'));
    }
}
