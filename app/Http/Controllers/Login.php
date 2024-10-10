<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function logar(Request $request){
        $dados = $request->except("_token");

        if(!Auth::attempt($dados)){
            return redirect()->back()->with('error','Email ou Senha invalidos/inexistente');
        }

        $request->session()->regenerate();
        return redirect()->route('bemvindo');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.home');
    }
}
