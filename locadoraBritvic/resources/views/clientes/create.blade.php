@extends('layouts.principal',["current"=>"clientes"])

@section('conteudo')

<h3>Novo Cliente:</h3>

<div class="card border">
    <div class="card-body">
      <form action="/clientes" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoCliente" id="novoCliente" placeholder="Digite seu nome" aria-label="First name"><br>
          <input type="text" class="form-control" name="novoCpf" id="novoCpf" placeholder="Digite seu CPF" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection