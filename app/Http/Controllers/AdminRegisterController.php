<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
//form field validation
use Validator;

//user details authentication
use Auth;

class AdminRegisterController extends Controller
{
    
    
    public function register(Request $request){
        $admin = new Admin();

        $customerId = Admin::pluck('adminId')->last();
        $admin->adminId = $adminId + 1;
        $admin->fname = $request['fname'];
        $admin->lname = $request['lname'];
        $admin->no = $request['no'];
        $admin->street = $request['street'];
        $admin->city = $request['city'];
        $admin->email = $request['email'];
        $admin->phoneNo = $request['phoneNo'];
        $admin->password = $request['password'];
        $admin->save();
        return redirect('adminDashboard');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:customers|max:225',
            'mobile' => 'required|max:10',
            'no' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'phoneNO' => 'required|max:225',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
//form field validation
use Validator;

//user details authentication
use Auth;

class AdminRegisterController extends Controller
{
    
    
    public function register(Request $request){
        $admin = new Admin();

        $customerId = Admin::pluck('adminId')->last();
        $admin->adminId = $adminId + 1;
        $admin->fname = $request['fname'];
        $admin->lname = $request['lname'];
        $admin->no = $request['no'];
        $admin->street = $request['street'];
        $admin->city = $request['city'];
        $admin->email = $request['email'];
        $admin->phoneNo = $request['phoneNo'];
        $admin->password = $request['password'];
        $admin->save();
        return redirect('adminDashboard');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:customers|max:225',
            'mobile' => 'required|max:10',
            'no' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'phoneNO' => 'required|max:225',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}