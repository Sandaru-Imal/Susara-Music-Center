<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


class CustomAuthController2 extends Controller
{
    public function register2(Request $request){

        $this -> validation($request);
        User::create($request->all());
        return redirect('/')->with('status','Welcome ');
        // return $request->all();
        
    }

    public function validation($request){

        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:users|max:225',
            'mobile' => 'required|max:10',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}
