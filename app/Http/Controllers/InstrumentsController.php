<?php

namespace App\Http\Controllers;

use App\Instruments;
use DB;
use Illuminate\Http\Request;

// use App\Http\Request;

class InstrumentsController extends Controller
{
    public function getIndex(){

      $products = Instruments::all();
      // $products = DB::select("select * from products where productname='DD-65'");
      // return $products;
      return view('instrument.percution', ['instruments' => $products]);
      // return view('products.percution')->with('products', $products);
    }

}
