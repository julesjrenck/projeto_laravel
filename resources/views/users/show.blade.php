<x-layout title="Seja bem vindo {{ $user->nome }}!" nome="{{ $user->nome }}" id="{{ $user->id }}">    
    <div class="card mt-3">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-conta-tab" data-bs-toggle="tab" data-bs-target="#nav-conta" type="button" role="tab" aria-controls="nav-conta" aria-selected="true">Conta</button>
                    <button class="nav-link" id="nav-endereco-tab" data-bs-toggle="tab" data-bs-target="#nav-endereco" type="button" role="tab" aria-controls="nav-endereco" aria-selected="false">Endereço</button>
                    <button class="nav-link" id="nav-foto-tab" data-bs-toggle="tab" data-bs-target="#nav-foto" type="button" role="tab" aria-controls="nav-foto" aria-selected="false">Foto</button>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-conta" role="tabpanel" aria-labelledby="nav-conta-tab" tabindex="0">
                    <table class="table caption-top">
                        <caption>Dados do Usuário</caption>
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Data de Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->nome}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->cpf}}</td>
                                <td>{{$user->telefone}}</td>
                                <td>{{ date( 'd/m/Y' , strtotime($user->data_nascimento))}}</td>
                                <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-light">Editar</a>
                                </td>
                            </tr>                            
                        </tbody>
                     </table>
                </div>
                <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab" tabindex="0">Endereço</div>
                <div class="tab-pane fade" id="nav-foto" role="tabpanel" aria-labelledby="nav-foto-tab" tabindex="0">Foto</div>
            </div>
        </div>
   </div>    
</x-layout>