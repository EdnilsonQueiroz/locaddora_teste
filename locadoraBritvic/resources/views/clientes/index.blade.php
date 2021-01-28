@extends('layouts.principal')

@section('conteudo')
 
    <h4>Pagina de Clientes</h4> 
    
    <a href="{{route('clientes.create')}}">Novo Cliente</a>

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Clientes</h5>
            <table class=" table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>    
                </thead> 
                <tbody>
                @foreach ($clientes as $clientes)
                    <tr>
                        <td>{{$clientes->id}}</td>
                        <td>{{$clientes->nome}}</td>
                        <td>
                            <a href="/editar/{{$clientes->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/delete/{{$clientes->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach    
                </tbody>   
            </table>

        </div>

    </div>
    
   

@endsection