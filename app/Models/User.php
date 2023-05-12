<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nome', 'password', 'data_nascimento', 'cpf', 'telefone', 'email'];

    public function enderecos()
    {
        return $this->hasOne(Endereco::class, 'users_id');
    }
}
