<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function showHome()
    {
        return view('home');
    }

    
    public function login(Request $request)
    {
        

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('emendas');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalida a sessão do usuário
        $request->session()->invalidate();

        // Regenera o token CSRF
        
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Você saiu com sucesso!');
    }
    
}
