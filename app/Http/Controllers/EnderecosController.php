<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnderecosFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Endereco;

class EnderecosController extends Controller
{
    public function create() {
        return view('enderecos.create')->with('user', Auth::user());
    }

    public function edit(Endereco $endereco) {
        return view('enderecos.edit')->with([
            'endereco' => $endereco,
            'user'     => Auth::user()
        ]);
    }    

    public function update(Endereco $endereco, EnderecosFormRequest $request) {
        $endereco->fill($request->all());
        $endereco->save();
        $user = User::query()->where('id', Auth::id())->first();
        return to_route('users.show', $user->id);
    }
}
