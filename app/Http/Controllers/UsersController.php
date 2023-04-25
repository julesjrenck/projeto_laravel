<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all(); // User::query()->orderBy('nome')->get();
        return view('users.index')->with('users', $users);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
       $user = new User();
       $user->nome = $request->input('nome');
       $user->senha = $request->input('senha');
       $user->data_nascimento = $request->input('data_nascimento');
       $user->cpf = $request->input('cpf');
       $user->telefone = $request->input('telefone');
       $user->email = $request->input('email');
       $user->save();
       return redirect('/users');
    }
}