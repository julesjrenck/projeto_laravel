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
        <span class="d-flex">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">E</a>
            <form action="{{ route ('users.destroy', $user->id) }}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">X</button>
            </form>
        </span>        
        </li>    
        @endforeach
    </ul>    
</x-layout>