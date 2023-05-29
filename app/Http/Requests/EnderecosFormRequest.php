<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecosFormRequest extends FormRequest
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
        return [           
            'cep' => ['required', 'digits:8'],
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',            
        ];          
                
    }

    public function messages(): array
    {
        return [
            'cep.required' => 'O campo cep é obrigatório',
            'cep.digits' => 'O campo cep deve conter :digits números',
            'rua.required' => 'O campo rua é obrigatório',
            'numero.required' => 'O campo numero é obrigatório',
            'bairro.required' => 'O campo bairro é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'estado.required' => 'O campo estado é obrigatório',
        ];
    }
}
