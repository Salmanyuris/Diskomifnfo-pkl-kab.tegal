<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginStore(Request $request){
        
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])){
            $request->session()->regenerate();

            return redirect()->route('homeadmin');
        }

        return redirect()->back()->with('gagal', '*Gagal login, pastikan username dan password benar');
    }

    public function register(){
        return view('register');
    }

    public function registerStore(Request $request){
        DB::table('users')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
