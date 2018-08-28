<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product.index', ['products' => $products]);
    }

    public function view($id, $slug = null)
    {
        $product = Product::find($id);

        return view('product.view', ['product' => $product]);
    }
}