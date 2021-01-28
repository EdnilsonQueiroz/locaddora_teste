@extends('layouts.principal',["current"=>"reservas"])

@section('conteudo')

<h3>Nova reserva:</h3>

<div class="card border">
    <div class="card-body">
      <form action="/reservas" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="novoIdCliente" id="novoIdCliente" placeholder="Digite o Id do cliente" aria-label="First name"><br>
          <input type="text" class="form-control" name="novoIdVeiculo" id="novoIdVeiculo" placeholder="Digite o Id do Veiculo" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novaDataS" id="novaDataS" placeholder="Data de Saída" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaHoraS" id="novaHoraS" placeholder="Hora de Saída" aria-label="Last name"><br>
          <input type="text" class="form-control" name="novaDataE" id="novaDataE" placeholder="Data de Retorno" aria-label="First name"><br>
          <input type="text" class="form-control" name="novaHoraE" id="novaHoraE" placeholder="Hora do Retorno" aria-label="Last name">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  
</div>
    
@endsection