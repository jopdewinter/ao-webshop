<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $hello = "hello";
        return view('pages.index')->with('hello', $hello);
    }

    public function about() {
        return view('pages.about');
    }
}
