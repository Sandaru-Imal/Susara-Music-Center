<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

// use App\Http\Request;

class ProductController extends Controller
{
    public function getIndex(){

      $products = Product::all();
      return view('products.percution', ['products' => $products]);
    }
}