<?php

namespace App\Http\Livewire;

use App\Models\Endereco as ModelsEndereco;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Endereco extends Component
{
    protected array $rules = [
        'data.cep' => ['required', 'digits:8'],
        'data.rua' => 'required',
        'data.numero' => 'required',
        'data.bairro' => 'required',
        'data.cidade' => 'required',
        'data.estado' => 'required',   
    ];
    protected array $messages = [
        'data.cep.required' => 'O campo Cep é obrigatório',
        'data.cep.digits' => 'O campo Cep deve conter :digits números',
        'data.rua.required' => 'O campo Rua é obrigatório',
        'data.numero.required' => 'O campo Número é obrigatório',
        'data.bairro.required' => 'O campo Bairro é obrigatório',
        'data.cidade.required' => 'O campo Cidade é obrigatório',
        'data.estado.required' => 'O campo Estado é obrigatório',
    ];
    public $data = [];
   
    public function render() {
        return view('livewire.endereco');
    }

    public function mount(): void {
        $this->data = [
            'cep' => '',
            'rua' => '',
            'numero' => '',
            'complemento' => '',
            'bairro' => '',
            'cidade' => '',
            'estado' => '',
        ];
    }

    public function updated(string $key, string $value): void {
        if ($key === 'data.cep') {
            $response = Http::get("https://viacep.com.br/ws/{$value}/json")->json();
            if (isset($response['logradouro'])){
                $this->data['rua']  = $response['logradouro'];
                $this->data['bairro']  = $response['bairro'];
                $this->data['cidade']  = $response['localidade'];
                $this->data['estado']  = $response['uf'];
            }       
        }        
    }

    public function save()
    {
        $this->validate();
        $user = User::query()->where('id', Auth::id())->first();
        $user->enderecos()->create([
            'cep' => $this->data['cep'],
            'rua' => $this->data['rua'],
            'numero' => $this->data['numero'],
            'complemento' => $this->data['complemento'],
            'bairro' => $this->data['bairro'],
            'cidade' => $this->data['cidade'],
            'estado' => $this->data['estado'],
        ]);
        return to_route('users.show', $user->id);
    }
}
