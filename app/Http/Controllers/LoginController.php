<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }
    public function store(Request $request) {
        if(!Auth::attempt($request->except(['_token']))){
            return redirect()->back()->withErrors('Usuário ou senha inválidos');
        }
        $user = User::query()->where('email', $request['email'])->first();
        return to_route('users.show', $user->id);
    }
    public function destroy() {
        Auth::logout();
        return to_route('login');
    }
}
