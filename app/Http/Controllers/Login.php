<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function storeUser(Request $request){
        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login.home');
    }
}
