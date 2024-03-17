<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;

class StoreController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'fullName'=>'required',
            'email'=>[
                'required',
                'email',
                Rule::unique('users','email'),
            ],
            'password'=>'required',
            'terms'=>'required'
        ],[
            'fullName.required'=>'Full name is required',
            'email.required'=>'Email is required',
            'password.required'=>'Password is required',
            'terms.required'=>'Please accept terms & Condition.'
        ]);
            $user= new User;
            $user->name= $request['fullName'];
            $user->email= $request['email'];
            $user->password= Hash::make($request['password']);
            $user->save();
            return redirect('/');
        }
}
