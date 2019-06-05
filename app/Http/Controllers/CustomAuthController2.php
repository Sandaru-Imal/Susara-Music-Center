<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\customer;


class CustomAuthController2 extends Controller
{
    public function register2(Request $request){

        $this -> validation($request);
        // customer_phoneNo::create($request->all());
        customer::create($request,['city','fname','lname','no','street']);
        customer_phoneNo::create($request,['email','nic','password','phoneNo',]);
        return redirect('/')->with('status','Welcome ');
        // return $request->all();
        
    }

    public function validation($request){

        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:users|max:225',
            'phoneNo' => 'required|max:10',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}
