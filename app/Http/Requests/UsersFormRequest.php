<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST': {
                return [
                    'nome' => ['required', 'min:3'],
                    'senha' => ['required', 'min:8'],
                    'data_nascimento' => 'required',
                    'cpf' => ['required', 'digits:11'],
                    'telefone' => ['required', 'digits:11'],
                    'email' => ['required', 'unique:users,email']
                ];
            }
            case 'PUT': {
                return [
                    'nome' => ['required', 'min:3'],
                    'senha' => ['required', 'min:8'],
                    'data_nascimento' => 'required',
                    'cpf' => ['required', 'digits:11'],
                    'telefone' => ['required', 'digits:11']
                ];
            }
        }
        
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de pelo menos :min caracteres',
            'senha.required' => 'O campo senha é obrigatório',
            'senha.min' => 'O campo senha precisa de pelo menos :min caracteres',
            'data_nascimento.required' => 'O campo data é obrigatório',
            'cpf.required' => 'O campo cpf é obrigatório',
            'cpf.digits' => 'O campo cpf deve conter :digits números',
            'telefone.required' => 'O campo telefone é obrigatório',
            'telefone.digits' => 'O campo telefone deve conter :digits números',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.unique' => 'O campo e-mail deve ser único para um usuário',
        ];
    }
}
