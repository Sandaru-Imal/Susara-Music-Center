<?php

namespace App\Http\Controllers;

use App\Instruments;
use DB;
use Illuminate\Http\Request;

// use App\Http\Request;

class InstrumentsController extends Controller
{
    public function getIndex(){

      // $products = Product::all();
      $products = DB::select("select * from products where productname='DD-65'");
      // return $products;
      return view('products.percution', ['products' => $products]);
      // return view('products.percution')->with('products', $products);
    }

}
