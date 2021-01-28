@extends('layouts.principal',["current"=>"clientes"])

@section('conteudo')

<h3>Novo Cliente:</h3>

<div class="card border">
    <div class="card-body">
      <form action="/veiculos" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoModelo" id="novoModelo" placeholder="Digite o Modelo" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaMarca" id="novaMarca" placeholder="Digite a Marca" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novoAno" id="novoAno" placeholder="Digite o Ano" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaPlaca" id="novaPlaca" placeholder="Digite a Placa" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection