@extends('layouts.principal',["current"=>"clientes"])

@section('conteudo')

<h3>Editar Veiculo:</h3>

<div class="card border">
    <div class="card-body">
      <form action="/updateVei/{{$veiculos->id}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoModelo" id="novoModelo" value="{{$veiculos->modelo}}" placeholder="Digite o Modelo" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaMarca" id="novaMarca" value="{{$veiculos->marca}}" placeholder="Digite a Marca" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novoAno" id="novoAno" value="{{$veiculos->ano}}" placeholder="Digite o Ano" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaPlaca" id="novaPlaca" value="{{$veiculos->placa}}" placeholder="Digite a Placa" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection