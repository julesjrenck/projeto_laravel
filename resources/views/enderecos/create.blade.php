<x-layout title="Cadastrar Endereço" nome="{{ $user->nome }}" id="{{ $user->id }}">
    <x-enderecos.form :action="route('enderecos.store')" />
</x-layout>