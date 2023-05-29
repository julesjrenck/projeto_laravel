<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersFormRequest;
use App\Models\User;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
       $data = $request->all();
       $data['password'] = Hash::make($data['password']);
       $user = User::create($data);
       $request->session()->flash('mensagem.sucesso', "Usuário {$user->nome} adicionado com sucesso");
       Auth::login($user);
       return to_route('users.show', $user->id);
    }

    public function destroy(User $user) {       
        $user->delete();
        Auth::logout();
        return to_route('login');
    }

    public function edit(User $user) {
        return view('users.edit')->with('user', $user);
    }

    public function update(User $user, UsersFormRequest $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user->fill($data);
        $user->save();

        return to_route('users.show', $user->id);
    }

    public function show(User $user) {
        return view('users.show')->with([
            'user' => $user,
            'endereco' => $user->enderecos()->first()
        ]);
    }
}