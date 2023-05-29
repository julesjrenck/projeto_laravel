<x-layout title="Editar Endereço" nome="{{ $user->nome }}" id="{{ $user->id }}">
    <x-enderecos.form 
        :action="route('enderecos.update', $endereco->id)"
        :update="true"
        :cep="$endereco->cep"
        :rua="$endereco->rua"
        :numero="$endereco->numero"
        :complemento="$endereco->complemento"
        :bairro="$endereco->bairro"
        :cidade="$endereco->cidade"
        :estado="$endereco->estado"
    />
</x-layout>