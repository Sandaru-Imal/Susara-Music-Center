<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Auth;
use App\Customer;

class userProfileController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function updateUserProfile()
    // {
    //     return view('updateUserProfile');
    // }

    public function editUserProfile()
    {
        $email = Auth::user()->email;
        $customers = DB::table('customers')->where('email','=',$email)->select('fname','lname','no','street','city','email','phoneNo','nic')->get();

        return view('updateUserProfile')->with('customers', $customers);
    }

    

    public function update(Request $request){

        //Change Password
        $customer = Auth::user();
        $customer->fname = $request->get('fname');
        $customer->lname = $request->get('lname');
        $customer->no = $request->get('no');
        $customer->street = $request->get('street');
        $customer->city = $request->get('city');
        $customer->phoneNo = $request->get('phoneNo');
        $customer->nic = $request->get('nic');
        $customer->email= $request->get('email');
        $customer->save();

        return redirect()->back()->with("success","Profile Updated Successfully !");

        // $customers = DB::table('customers');
        // $email = Auth::user()->email;

        // $customer = Customer::find($email);

        // $customers->update([
        //     'fname' => $request['fname'],
        //     'lname' => $request['lname'],
        //     'no' => $request['no'],
        //     'street' => $request['street'],
        //     'city' => $request['city'],
        //     'phoneNo' => $request['phoneNo'],
        //     'nic' => $request['nic'],
        //     'email' => $request['email'],
        // ])->except(['_token']);
        // return redirect('updateUserProfile')->with('success','Product updated successfully');

        // dd($request->all());
        // $customer->fname = $request->input('fname');
        // $customer->lname = $request->input('lname');
        // $customer->no = $request->input('no');
        // $customer->street = $request->input('street');
        // $customer->city = $request->input('city');
        // $customer->phoneno = $request->input('phoneno');
        // $customer->nic = $request->input('nic');
        // $customer->email = $request->input('email');
        // $customer->save();
  
        // return redirect('updateUserProfile')->with('success', 'Stock has been updated');
    }
  
}

