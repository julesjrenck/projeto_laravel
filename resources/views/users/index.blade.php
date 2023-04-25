<x-layout title="Usuários">
    <a href="/users/create" class="btn btn-primary">Adicionar</a>

    <ul class="list-group mt-3">
        @foreach ($users as $user)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $user->nome }}
        </li>    
        @endforeach
    </ul>    
</x-layout>