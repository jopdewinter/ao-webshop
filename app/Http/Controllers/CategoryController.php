<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Get the data from the database
        $categories = Categories::all();

        // Render the web page
        return view('category.index', ['categories' => $categories]);
    }

    public function view($id, $slug = null)
    {
        // Get the data from the database
        $category = Categories::find($id);
        $categoryId = $category->id;
        $products = Product::find($categoryId);

        // Render the web page
        return view('category.view', ['category' => $category, 'products' => $products]);
    }
}