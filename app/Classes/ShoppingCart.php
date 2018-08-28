<?php

namespace App\Classes;


use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCart
{
    protected $products = [];
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        if ($request->session()->has('shoppingCart')) {
            $shoppingCart = $request->session()->get('shoppingCart');

            $this->products = $shoppingCart->products;
        } else {
            $this->saveToSession();
        }
    }

    public function updateProduct(Product $product, int $amount = null)
    {
        if (($key = $this->searchShoppingCart($this->products, $product->id)) !== null) {
            isset($amount) ? $this->products[$key]->amount = $amount : $this->products[$key]->amount++;
        } else {
            isset($amount) ? $product->amount = $amount : $product->amount = 1;

            array_push($this->products, $product);
            end($this->products);
            $key = key($this->products);
        }

        if ($this->products[$key]->amount === 0) {
            unset($this->products[$key]);
        }

        $this->saveToSession();
    }

    public function getTotalPrice()
    {
        $total = 0.00;
        foreach ($this->products as $product) {
            $total = $total + $product->price * $product->amount;
        }

        return $total;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function emptyShoppingCart()
    {
        $this->products = [];
        $this->saveToSession();
    }

    private function searchShoppingCart(array $shoppingCart, int $productId)
    {
        foreach ($shoppingCart as $key => $shoppingCartItem) {
            if ($shoppingCartItem->id === $productId) {
                return $key;
            }
        }
        return null;
    }

    private function saveToSession()
    {
        $shoppingCart = (object) [];
        $shoppingCart->products = $this->products;

        $this->request->session()->put('shoppingCart', $shoppingCart);
    }
}