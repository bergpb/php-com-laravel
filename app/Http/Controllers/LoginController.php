<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use estoque\Http\Controllers\Controller;

use Request;

class LoginController extends Controller
{
    public function login() {
        $credentials = Request::only('email', 'password');

        if(Auth::attempt($credentials)) {
            return "Usuário logado com sucesso.";
        }
        return "Credenciais não são válidas.";
    }
}
