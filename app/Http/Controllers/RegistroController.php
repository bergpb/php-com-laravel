<?php

namespace estoque\Http\Controllers;

use estoque\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function create() {
        return view('registro.create');
    }

    public function store(Request $request) {
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('listar');
    }
}
