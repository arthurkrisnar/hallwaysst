<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginTenant(){
        return view('Tenant.login');
    }

    public function authTenant(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            //dd(session());
            $request->session()->regenerate();
            //dd(redirect()->intended('/tenant/menu'));
            return redirect()->intended('/tenant/menu');
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logoutTenant(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/tenant');
    }
}
