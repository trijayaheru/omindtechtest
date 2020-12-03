<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        if(Auth::user()){
            return redirect(url('/dashboard'));
        }
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }
    public function validate_login(Request $request){
        $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            Session::flash('message', 'Incorrect email/password');
            Session::flash('alert-class', 'alert-danger');
            return redirect(url(''));
        }else{
            return redirect(url('/dashboard'));
        }
    }
}
