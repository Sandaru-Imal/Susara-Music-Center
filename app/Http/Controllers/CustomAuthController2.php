<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;


class CustomAuthController2 extends Controller
{

    
    public function register2(Request $request){
        $customer = new Customer();

        $customerId = Customer::pluck('customerId')->last();
        $customer->customerId = $customerId + 1;
        $customer->fname = $request['fname'];
        $customer->lname = $request['lname'];
        $customer->no = $request['no'];
        $customer->street = $request['street'];
        $customer->city = $request['city'];
        $customer->save();
        return redirect('userDashboard');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            // 'email' => 'required|email|unique:users|max:225',
            'mobile' => 'required|max:10',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}