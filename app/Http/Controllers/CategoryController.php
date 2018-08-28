<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        return view('category.index', ['categories' => $categories]);
    }

    public function view($id, $slug = null)
    {
        $category = Categories::find($id);

        return view('category.view', ['category' => $category]);
    }
}