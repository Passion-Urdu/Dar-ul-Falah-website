<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function auth(Request $req){


        $credentials =  $req->validate([

            'name' => 'required|alpha_dash',

            'password' => 'required',

            'g-recaptcha-response' => 'recaptcha',

        ],
        
        [
            'name.required' => 'username is required',

            'password.required' => 'password is required',

            'g-recaptcha-response.recaptcha' => 'please confirm that you are not a reboot',

        ]);


        if(Auth::attempt(['name' => $req->name , 'password' => $req->password])){

            return redirect()->route('dashboard.index');
        }

        else{

            return back()->with('error' , 'Incorrect Login Credentials');
        }
        
    }

    public function logout(){

        Auth::logout();

        return redirect()->route('login.index');
        
    }
}
