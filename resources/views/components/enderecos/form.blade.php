<form action="{{ $action }}" method="post" class="row g-3">
@csrf
    @isset($update)
    @method('PUT')
    @endisset
     <div class="col-md-4">
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
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>    