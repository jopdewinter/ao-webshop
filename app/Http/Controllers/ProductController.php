<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Get the data from the database
        $products = Product::all();

        // Render the web page
        return view('product.index', ['products' => $products]);
    }

    public function view($id, $slug = null)
    {
        // Get the data from the database
        $product = Product::find($id);
        $categoryId = $product->categoryId;
        $category = Categories::find($categoryId);

        // Render the web page
        return view('product.view', ['product' => $product, 'category' => $category]);
    }
}