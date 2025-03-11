<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Sản phẩm 1', 'price' => '200.000₫', 'image' => 'product1.jpg'],
            ['name' => 'Sản phẩm 2', 'price' => '350.000₫', 'image' => 'product2.jpg'],
            ['name' => 'Sản phẩm 3', 'price' => '500.000₫', 'image' => 'product3.jpg'],
        ];
        return view('home', compact('products'));
    }
}
