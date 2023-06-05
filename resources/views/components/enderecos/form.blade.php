<form action="{{ $action }}" method="post" class="row g-3">
    @csrf
    @isset($update)
    @method('PUT')
    @endisset
     <div class="col-md-4">
        <label for="cep" class="form-label">CEP:</label>
        <input type="hidden" id="cep" name="cep" value="{{ $cep }}">
        <input type="text" class="form-control" value="{{ $cep }}" disabled>
    </div>
    <div class="col-md-4">
        <label for="rua" class="form-label">Rua:</label>
        <input  type="text" 
                id="rua"
                name="rua" 
                class="form-control @error('rua') is-invalid @enderror"
                @isset($rua)value="{{ $rua }}"@endisset
        >
        @error('rua')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-md-4">
        <label for="numero" class="form-label">Número:</label>
        <input type="text" 
               id="numero" 
               name="numero"
               class="form-control @error('numero') is-invalid @enderror"
               @isset($numero)value="{{ $numero }}"@endisset
        >
        @error('numero')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-md-4">
        <label for="complemento" class="form-label">Complemeto:</label>
        <input  type="text" 
                id="complemento" 
                name="complemento" 
                class="form-control"
                @isset($complemento)value="{{ $complemento }}"@endisset
        >
    </div>
    <div class="col-md-4">
        <label for="bairro" class="form-label">Bairro:</label>
        <input  type="text" 
                id="bairro" 
                name="bairro" 
                class="form-control @error('bairro') is-invalid @enderror"
                @isset($bairro)value="{{ $bairro }}"@endisset
        >
        @error('bairro')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input  type="text" 
                id="cidade" 
                name="cidade" 
                class="form-control
                @error('cidade') is-invalid @enderror"
                @isset($cidade)value="{{ $cidade }}"@endisset
        >
        @error('cidade')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-md-4">
        <label for="estado" class="form-label">Estado:</label>
        <input  type="text" 
                id="estado" 
                name="estado" 
                class="form-control @error('estado') is-invalid @enderror"
                @isset($estado)value="{{ $estado }}"@endisset
        >
        @error('estado')  
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror  
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>    