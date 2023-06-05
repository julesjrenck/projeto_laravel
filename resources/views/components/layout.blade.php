<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <p class="navbar-brand">Sistema em construção</p>            
            @auth
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $nome }}
</a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ route ('users.destroy', $id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item">Excluir</button>
                            </form>   
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                                       
                </li>
            </ul>
            @endauth
        </div>
    </nav>
    <div class="container">
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>