<x-layout title="Editar Usuário {{ $user->nome }}">
    <x-users.form 
        :action="route('users.update', $user->id)" 
        :update="true"
        :nome="$user->nome" 
        :senha="$user->senha"
        :datanascimento="$user->data_nascimento"
        :cpf="$user->cpf"
        :telefone="$user->telefone"
        :email="$user->email"
    />    
</x-layout>