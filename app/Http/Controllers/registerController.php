<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function registTenant(){
        return view('Tenant.registrasi');
    }
    
    public function postRegistTenant(Request $request){
        $validateData = $request->validate([
            'tenant_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'telephone' => 'required|unique:users',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/tenant');
    }
}
