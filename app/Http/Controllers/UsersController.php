<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request) {
        $users = User::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('users.index')->with('users', $users)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() {
        return view('users.create');
    }

    public function store(UsersFormRequest $request) {
       
       $user = User::create($request->all());
       $request->session()->flash('mensagem.sucesso', "Usuário {$user->nome} adicionado com sucesso");
       return to_route('users.index');
    }

    public function destroy(User $user) {       
        $user->delete();
        return to_route('users.index')
            ->with('mensagem.sucesso', "Usuário {$user->nome} removido com sucesso");
    }

    public function edit(User $user) {
        dd($user->enderecos);
        return view('users.edit')->with('user', $user);
    }

    public function update(User $user, UsersFormRequest $request) {
        $user->fill($request->all());
        $user->save();

        return to_route('users.index')
            ->with('mensagem.sucesso', "Usuário {$user->nome} atualizado com sucesso");
    }
}