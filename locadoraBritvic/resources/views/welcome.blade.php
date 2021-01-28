@extends('layouts.principal',["current"=>"welcome"])


@section('conteudo')

<div class="jumbotron bg-light border border-secondary">

        <h3>Locadora de Veiculos Britvic</h3>
    
        <a href="{{route('clientes.index')}}">Clientes</a><br>
        <a href="{{route('veiculos.index')}}">Veiculos</a><br>
        <a href="{{route('reservas.index')}}">Reservas</a><br>
    
</div>
@endsection