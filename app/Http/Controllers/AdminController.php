<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    // Verifique se o usuário tem permissão de administrador, por exemplo, com base em um campo no modelo User
    if (auth()->check() && auth()->user()->isAdmin()) {
        // O usuário é um administrador, conceda acesso
        return view('home.create'); // Redirecione para o painel de controle do administrador ou página desejada
    }

    // O usuário não é um administrador, redirecione ou exiba uma mensagem de erro
    return redirect()->route('home.index'); // Redirecione para a página inicial ou outra página apropriada
}

}
