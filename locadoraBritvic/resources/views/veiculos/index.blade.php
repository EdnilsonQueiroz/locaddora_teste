@extends('layouts.principal',["current"=>"veiculos"])

@section('conteudo')
 
    <h4>Pagina de Veiculos</h4> 
    
    <a href="{{route('veiculos.create')}}">Novo veiculo</a>
    
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Clientes</h5>
            <table class=" table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Ano</th>
                        <th>Placa</th>
                        <th>Ações</th>
                    </tr>    
                </thead> 
                <tbody>
                @foreach ($veiculos as $veiculos)
                    <tr>
                        <td>{{$veiculos->id}}</td>
                        <td>{{$veiculos->modelo}}</td>
                        <td>{{$veiculos->marca}}</td>
                        <td>{{$veiculos->ano}}</td>
                        <td>{{$veiculos->placa}}</td>
                        <td>
                            <a href="/editarVei/{{$veiculos->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/deleteVei/{{$veiculos->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>   
            </table>

        </div>

    </div>

@endsection