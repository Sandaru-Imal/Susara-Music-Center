<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkLogin(){
      //Check for user Login
      // if(Auth::check()){
      //
      // }
    }
    public function formValidation(){
      // require 'lib/Stripe.php';

      $error = '';
      $success = '';

      if ($_POST) {
        \Stripe\Stripe::setApiKey("sk_test_xxx");

        try {
	         if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
           throw new Exception("Fill out all required fields.");
           if (!isset($_POST['stripeToken']))
           throw new Exception("The Stripe Token was not generated correctly");

	          \Stripe\Charge::create([
	             "amount" => 3000,
	              "currency" => "eur",
	              "source"   => $_POST['stripeToken'], // obtained with Stripe.js
	              "description" => $_POST['email']
	            ]);

              $success = '<div class="alert alert-success"><strong>Success!</strong> Your payment was successful.</div>';
            }catch (Exception $e) {
	             $error = '<div class="alert alert-danger"><strong>Error!</strong> '.$e->getMessage().'</div>';
             }
        }
    }
}
