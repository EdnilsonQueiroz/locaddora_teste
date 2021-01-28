@extends('layouts.principal',["current"=>"reservas"])

@section('conteudo')

<h3>Nova reserva:</h3>

<div class="card border">
    <div class="card-body">
      <form action="/updateRes/{{$reservas->id}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoIdCliente" value="{{$reservas->clientes_id}}" id="novoIdCliente" placeholder="Digite o Id do cliente" aria-label="First name"><br>
          <input type="text" class="form-control" name="novoIdVeiculo" value="{{$reservas->veiculo_id}}" id="novoIdVeiculo" placeholder="Digite o Id do Veiculo" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novaDataS" value="{{$reservas->data_saida}}" id="novaDataS" placeholder="Data de Saída" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaHoraS" value="{{$reservas->hora_saida}}" id="novaHoraS" placeholder="Hora de Saída" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novaDataE" value="{{$reservas->data_entrada}}" id="novaDataE" placeholder="Data de Retorno" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaHoraE" value="{{$reservas->hora_entrada}}" id="novaHoraE" placeholder="Hora do Retorno" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection