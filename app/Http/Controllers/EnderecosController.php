<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EnderecosController extends Controller
{
    public function create() {
        return view('enderecos.create')->with('user', Auth::user());
    }

    public function store(Request $request) {
        $user = User::query()->where('id', Auth::id())->first();
        $user->enderecos()->create([
            'cep' => $request->input('cep'),
            'rua' => $request->input('rua'),
            'numero' => $request->input('numero'),
            'complemento' => $request->input('complemento'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);
        return to_route('users.show', $user->id);
    }
}
