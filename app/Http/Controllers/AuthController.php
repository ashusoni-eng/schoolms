<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$request['email'];
        $password=$request['password'];
        $remember= $request->has('remember');        
        if(Auth::attempt(['email'=>$email,'password'=>$password],$remember)){
            session(['IS_LOGIN'=>'YES','email'=>$email,'password'=>$password]);
            if($remember){
                Cookie::queue('email',$email,43200);
                Cookie::queue('password',$password,time()+60*60);
            }else{
                Cookie::forget('email');
                Cookie::forget('password');
            }
            return redirect('dashboard');
        }else{
            return back()->withErrors(['invalidUser'=>"Invalid Credentials"]);
        }
    }
}
