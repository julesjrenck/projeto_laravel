<x-layout title="Usuários">
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group mt-3">
        @foreach ($users as $user)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $user->nome }}
        <form action="{{ route ('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">X</button>
        </form>
        </li>    
        @endforeach
    </ul>    
</x-layout>