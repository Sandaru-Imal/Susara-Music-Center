<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class CheckoutController extends Controller
{
    public function checkLogin(){
      //Check for user Login
      // if(Auth::check()){
      //
      // }
    }
    // public function paywithPaypal(){
    //
    //   $provider = new ExpressCheckout;      // To use express checkout.
    //
    //   $data = [];
    //   $data['items'] = [];
    //
    //   foreach (Instruments::content() as $key->$cart) {
    //     $itemDetails=[
    //       'instrumentName' => ,
    //       'price' => 9.99,
    //       'desc'  => 'Description for product 1'
    //       'qty' => 1
    //     ];
    //   }
    //
    //   $data['invoice_id'] = 1;
    //   $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
    //   $data['return_url'] = url('/payment/success');
    //   $data['cancel_url'] = url('/cart');
    //
    //   $total = 0;
    //   foreach($data['items'] as $item) {
    //     $total += $item['price']*$item['qty'];
    //   }
    //
    //   $data['total'] = $total;
    //
    //   //give a discount of 10% of the order amount
    //   $data['shipping_discount'] = round((10 / 100) * $total, 2);
    // }

    public function formValidation(){
      // require 'lib/Stripe.php';

      // $error = '';
      // $success = '';
      //
      // if ($_POST) {
      //   \Stripe\Stripe::setApiKey("sk_test_xxx");
      //
      //   try {
	    //      if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
      //      throw new Exception("Fill out all required fields.");
      //      if (!isset($_POST['stripeToken']))
      //      throw new Exception("The Stripe Token was not generated correctly");
      //
	    //       \Stripe\Charge::create([
	    //          "amount" => 3000,
	    //           "currency" => "eur",
	    //           "source"   => $_POST['stripeToken'], // obtained with Stripe.js
	    //           "description" => $_POST['email']
	    //         ]);
      //
      //         $success = '<div class="alert alert-success"><strong>Success!</strong> Your payment was successful.</div>';
      //       }catch (Exception $e) {
	    //          $error = '<div class="alert alert-danger"><strong>Error!</strong> '.$e->getMessage().'</div>';
      //        }
      //   }
    }
}
