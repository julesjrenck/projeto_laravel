<x-layout title="Novo Usuário">     
    <x-users.form :action="route('users.store')" :nome="old('nome')" />    
</x-layout>