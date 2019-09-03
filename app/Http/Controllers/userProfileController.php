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
    }

    public function destroy($customerId){
        // $customer = Auth::user();
        $user = Customer::find(Auth::user()->customerId);

        Auth::logout();
    
        if ($customer->destroy()) {
    
             return Redirect::route('/')->with('global', 'Your account has been deleted!');
        }
    }
  
}

