<form class="row g-3">
    <div class="col-md-4">
        <label for="cep" class="form-label">Cep:</label>
        <input  type="text" 
                wire:model.lazy="data.cep" 
                class="form-control @error('data.cep') is-invalid @enderror"
        >
        @error('data.cep')  
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror  
    </div> 
    <div class="col-md-4">
        <label for="rua" class="form-label">Rua:</label>
        <input  type="text" 
                wire:model="data.rua" 
                class="form-control @error('data.rua') is-invalid @enderror"
        >
        @error('data.rua')  
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror
    </div>  
    <div class="col-md-4">
        <label for="numero" class="form-label">Número:</label>
        <input  type="text" 
                wire:model="data.numero" 
                class="form-control @error('data.numero') is-invalid @enderror"
        >
        @error('data.numero')  
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror  
    </div> 
    <div class="col-md-4">
        <label for="complemento" class="form-label">Complemento:</label>
        <input type="text" wire:model="data.complemento" class="form-control">
    </div>  
    <div class="col-md-4">
        <label for="bairro" class="form-label">Bairro:</label>
        <input  type="text" 
                wire:model="data.bairro" 
                class="form-control @error('data.bairro') is-invalid @enderror"
        >
        @error('data.bairro')  
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror  
    </div>  
    <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input  type="text" 
                wire:model="data.cidade" 
                class="form-control @error('data.cidade') is-invalid @enderror"
        >
        @error('data.cidade')   
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror  
    </div>  
    <div class="col-md-4">
        <label for="estado" class="form-label">Estado:</label>
        <input  type="text" 
                wire:model="data.estado" 
                class="form-control @error('data.estado') is-invalid @enderror"
        >
        @error('data.estado')  
        <div class="invalid-feedback" style="display: block;">
            {{$message}}
        </div>
        @enderror  
    </div>    
    <div class="col-12">
        <button class="btn btn-primary" type="button" wire:click="save">Salvar</button>
    </div>
</form>   