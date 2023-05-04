<form action="{{ $action }}" method="post" class="row g-3">
    @csrf
    @isset($update)
    @method('PUT')
    @endisset
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome Completo:</label>
        <input type="text" id="nome" name="nome" class="form-control
            @error('nome') is-invalid @enderror" 
            @isset($nome)value="{{ $nome }}"@endisset>
        @error('nome')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>    
    <div class="col-md-4">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" id="senha" name="senha" class="form-control
            @error('senha') is-invalid @enderror"  
            @isset($senha)value="{{ $senha }}"@endisset>
        @error('senha')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-md-4">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control 
            @error('data_nascimento') is-invalid @enderror"
            @isset($datanascimento)value="{{ $datanascimento }}"@endisset>
        @error('data_nascimento')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror      
    </div>
    <div class="col-md-4">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="form-control
            @error('cpf') is-invalid @enderror"
            @isset($cpf)value="{{ $cpf }}"@endisset>
        @error('cpf')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror        
    </div>
    <div class="col-md-4">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" class="form-control
            @error('telefone') is-invalid @enderror" 
            @isset($telefone)value="{{ $telefone }}"@endisset>
        @error('telefone')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror        
    </div>
    <div class="col-md-4">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control
            @error('email') is-invalid @enderror"  
            @isset($email)value="{{ $email }}"@endisset>
        @error('email')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror        
    </div>
    <!--div class="col-md-4">
        <label for="cep" class="form-label">CEP:</label>
        <input type="text" id="cep" name="cep" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="rua" class="form-label">Rua:</label>
        <input type="text" id="rua" name="rua" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="numero" class="form-label">Número:</label>
        <input type="text" id="numero" name="numero" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="complemento" class="form-label">Complemeto:</label>
        <input type="text" id="complemento" name="complemento" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="bairro" class="form-label">Bairro:</label>
        <input type="text" id="bairro" name="bairro" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" id="cidade" name="cidade" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="estado" class="form-label">Estado:</label>
        <input type="text" id="estado" name="estado" class="form-control">
    </div-->
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>