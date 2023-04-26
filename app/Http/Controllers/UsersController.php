<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request) {
        $users = User::all(); // User::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('users.index')->with('users', $users)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
       //User::create($request->all());
       User::create($request->only(['nome', 'senha', 'data_nascimento', 'cpf', 'telefone', 'email']));
       $request->session()->flash('mensagem.sucesso', 'Usuário adicionado com sucesso');
       return to_route('users.index');
    }

    public function destroy(Request $request) {
        User::destroy($request->user);
        $request->session()->flash('mensagem.sucesso', 'Usuário removido com sucesso');
        return to_route('users.index');
    }
}