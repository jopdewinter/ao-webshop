<?php

namespace App\Http\Controllers;

use App\Classes\ShoppingCart;
use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(Request $request)
    {
        $shoppingCart = new ShoppingCart($request);

        return view('shopping_cart.index', ['shoppingCart' => $shoppingCart]);
    }
    
    public function update(Request $request, int $productId, int $amount = null)
    {
        $shoppingCart = new ShoppingCart($request);

        $shoppingCart->updateProduct(Product::find($productId), $amount);

        return redirect()->route('shoppingCartIndex');
    }
}