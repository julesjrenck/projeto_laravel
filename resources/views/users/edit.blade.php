<x-layout title="Editar Usuário {{ $user->nome }}" nome="{{ $user->nome }}" id="{{ $user->id }}">
    <x-users.form 
        :action="route('users.update', $user->id)" 
        :update="true"
        :nome="$user->nome" 
        :datanascimento="$user->data_nascimento"
        :cpf="$user->cpf"
        :telefone="$user->telefone"
        :email="$user->email"
    />    
</x-layout>