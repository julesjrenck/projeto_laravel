<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = ['cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'estado'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
