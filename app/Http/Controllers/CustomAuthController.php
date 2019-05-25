<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function showRegisterForm(){
            //view register.blade.php inside custom folder
            return view('custom.register');
    } 
}
