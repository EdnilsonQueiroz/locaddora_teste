@extends('layouts.principal',["current"=>"reservas"])

@section('conteudo')
 
<h4>Pagina de Reservas</h4> 
    
<a href="{{route('reservas.create')}}">Nova reserva</a>

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Lista de Reservas</h5>
        <table class=" table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id Cliente</th>
                    <th>Id Veiculo</th>
                    <th>Data de Saída</th>
                    <th>Hora da Saída</th>
                    <th>Data de Devolução</th>
                    <th>Hora de Devolução</th>
                </tr>    
            </thead> 
            <tbody>
            @foreach ($reservas as $reservas)
                <tr>
                    <td>{{$reservas->id}}</td>
                    <td>{{$reservas->clientes_id}}</td>
                    <td>{{$reservas->veiculo_id}}</td>
                    <td>{{$reservas->data_saida}}</td>
                    <td>{{$reservas->hora_saida}}</td>
                    <td>{{$reservas->data_entrada}}</td>
                    <td>{{$reservas->hora_entrada}}</td>
                    <td>
                        <a href="/editarRes/{{$reservas->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/deleteRes/{{$reservas->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach    
            </tbody>   
        </table>

    </div>

</div>
   

@endsection