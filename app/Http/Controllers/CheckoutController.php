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
   //  public function formValidation(){
   //  	return view('form-validation');
   //  }
   //
   //  public function formValidationPost(Request $request){
   //   $this->validate($request,[
   //       'firstname' => 'required|min:5|max:35',
   //       'lastname' => 'required|min:5|max:35',
   //       'email' => 'required|email|unique:users',
   //
   //     ],[
   //       'firstname.required' => ' The first name field is required.',
   //       'firstname.min' => ' The first name must be at least 5 characters.',
   //       'firstname.max' => ' The first name may not be greater than 35 characters.',
   //       'lastname.required' => ' The last name field is required.',
   //       'lastname.min' => ' The last name must be at least 5 characters.',
   //       'lastname.max' => ' The last name may not be greater than 35 characters.',
   //     ]);
   //
   //
   //   dd('You are successfully added all fields.');
   // }
}
