<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(1);
        return view('training.add-to-cart.index', compact('products'));
    }
}
