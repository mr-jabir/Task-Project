<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function loginpage(){
        return view('login');

    }

    public function login(){
        $data=request()->only(['email','password']);
        if(Auth()->attempt($data)){
            return redirect()->route('showtask');
        }else{
            return redirect()->route('loginpage');
        }
    }

    public function registerpage(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('loginpage');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage');
    }
}
