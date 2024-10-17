<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function testes(Request $request)
    {
        //dados do usuário autenticado
        // $id = auth()->user()->id;
        // // ou
        // $id = Auth::id();
        // // ou
        // $id = $request->user()->id;

        // obtendo o email do usuário
        // $username = auth()->user()->email;
        $username = $request->user()->email;
        echo $username;
    }

    public function nova_pagina_publica(): View
    {
        return view('nova_pagina_publica');
    }

    public function main_logout()
    {
        // fazer o logout sem post - limpar o usuário da sessão
        Auth::logout();

        // Invalidar a sessão e regenerar o token
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
