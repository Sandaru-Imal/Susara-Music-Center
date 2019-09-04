<?php
namespace App\Http\Controllers\Auth;
use App\Cashier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class CashierRegisterController extends Controller{
use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/cashierHome';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    // public function showRegisterForm(){
    //     return view('auth.cashier-register');
    // }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'no' => ['required', 'string', 'max:10'],
            'street' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'nic' => ['required', 'string', 'max:10'],
            'phoneNo' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Customer::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'no' => $data['no'],
            'street' => $data['street'],
            'city' => $data['city'],
            'phoneNo' => $data['phoneNo'],
            'nic' => $data['nic'],
            'email' => $data['email'],
            'active'=>false,
            'active_token'=>str_random(20),
            'password' => Hash::make($data['password']),
        ]);
        }
     /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect()->route('cashierLogin')
        ->withSuccess( 'New Cashier has successfully registered');
    }
}