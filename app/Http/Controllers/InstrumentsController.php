<?php

namespace App\Http\Controllers;

use App\Instruments;
use DB;
use Illuminate\Http\Request;

// use App\Http\Request;

class InstrumentsController extends Controller
{
    public function getIndex(){

      $instruments = Instruments::all();
      // $products = DB::select("select * from products where productname='DD-65'");
      // return $products;
      return view('instrument.percution', ['instruments' => $instruments]);
      // return view('products.percution')->with('products', $products);
    }
    public function getAddToCart(Request $request, $instrumentId){
      $instrument = Instruments::find($instrumentId);

    }

}
