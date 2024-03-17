<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Students;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function manageClasses(){
        $classes= Classes::paginate(10);
        // $isStd= Students::where
        $data=compact('classes');
        return view('manageClasses')->with($data);
    }
    public function addClass(){
        return view('addClass');
    }
    
}
