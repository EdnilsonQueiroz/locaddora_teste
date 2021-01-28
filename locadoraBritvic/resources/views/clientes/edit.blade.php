@extends('layouts.principal')

@section('conteudo')

<div class="card border">
    <div class="card-body">
      <form action="/update/{{$clientes->id}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoCliente" value="{{$clientes->nome}}" id="novoCliente" placeholder="Digite seu nome" aria-label="First name"><br>
          <input type="text" class="form-control" name="novoCpf" value="{{$clientes->cpf}}" id="novoCpf" placeholder="Digite seu CPF" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection