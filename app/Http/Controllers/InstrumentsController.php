<?php

namespace App\Http\Controllers;

use App\Instruments;
use App\Cart;
use DB;
use Illuminate\Http\Request;
use Session;

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
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($instrument,$instrument->instrumentId);

      $request->session()->put('cart', $cart);
      // dd($request->session()->get('cart'));//to show data in browser
      return redirect()->route('instrument.percution');
    }
    public function removeFromCart(Request $request, $instrumentId){
      $instrument = Instruments::find($instrumentId);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->destroy($instrument,$instrument->instrumentId);

      $request->session()->put('cart', $cart);
      // dd($request->session()->get('cart'));//to show data in browser
      return redirect()->route('shop.shopping-cart');
    }


}
