<?php

namespace App\Http\Controllers;

use App\Instruments;
use App\Cart;
use DB;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
  public function getCart(){
    if(!Session::has('cart')){
      return view('shop.shopping-cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('shop.shopping-cart', ['instruments' => $cart->items]);
    // return view('shop.shopping-cart', ['instruments' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }
  public function getCheckout(){
    if(!Session::has('cart')){
      return view('shop.shopping-cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    // $total = $cart->totalPrice;
    return view('shop.checkout');
    // return view('shop.checkout', ['total' => $total]);
  }
  public function postCheckout(){
    
  }
}
