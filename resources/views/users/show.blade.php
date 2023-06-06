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
                <div class="tab-pane fade" id="nav-endereco" role="tabpanel" aria-labelledby="nav-endereco-tab" tabindex="0">                
                    @empty($endereco)
                        <p class="mt-3">Ainda não há um endereço cadastrado <a href="{{ route('enderecos.create') }}" class="btn btn-light">Adicionar</a></p>                        
                    @endempty
                    @if($endereco)
                    <table class="table caption-top">
                        <caption>Dados do Endereço</caption>
                        <thead>
                            <tr>
                                <th scope="col">Cep</th>
                                <th scope="col">Rua</th>
                                <th scope="col">Número</th>
                                <th scope="col">Complemento</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$endereco->cep}}</td>
                                <td>{{$endereco->rua}}</td>
                                <td>{{$endereco->numero}}</td>
                                <td>{{$endereco->complemento}}</td>
                                <td>{{$endereco->bairro}}</td>
                                <td>{{$endereco->cidade}}</td>
                                <td>{{$endereco->estado}}</td>
                                <td>
                                    <a href="{{ route('enderecos.edit', $endereco->id) }}" class="btn btn-light">Editar</a>
                                </td>
                            </tr>                            
                        </tbody>
                     </table>
                    @endif
                </div>
                <div class="tab-pane fade" id="nav-foto" role="tabpanel" aria-labelledby="nav-foto-tab" tabindex="0">
                    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf                       
                        @method('PATCH')
                        @if($user->foto)
                            <img src="{{ asset('storage/'. $user->foto) }}" 
                                 alt="Foto do Perfil" 
                                 class="img-thumbnail mt-3"
                                 style="width: 200px"
                            >
                        @endif
                        <div class="col-md-4">                        
                            <input  type="file" 
                                    id="foto" 
                                    name="foto" 
                                    class="form-control mt-5" 
                                    accept="image/gif, image/jpeg, image/png"
                            >                            
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                    </form>    
                </div>
            </div>
        </div>
   </div>    
</x-layout>