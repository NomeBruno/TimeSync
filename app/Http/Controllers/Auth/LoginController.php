<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Renderiza a tela de login
    public function create()
    {
        return view('auth.login');
    }

    // Processa a tentativa de autenticação
    public function store(Request $request)
    {
        // 1. Validação dos campos
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Insira um e-mail válido.',
            'password.required' => 'A senha é obrigatória.',
        ]);

        // 2. Tenta autenticar o usuário
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        // 3. Retorna erro se credenciais forem inválidas
        return back()->withErrors([
            'email' => 'As credenciais informadas não coincidem com nossos registros.',
        ])->onlyInput('email');
    }

    // Desconecta o usuário (Logout)
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}