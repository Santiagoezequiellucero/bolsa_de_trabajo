@extends('layout.plantilla')

@section('title','Inicio')
    
@section('content')
<br>
<div class="container mx-auto">
    <div class="jumbotron text-center">
        <h1>TotalGes</h1>
        <p>Registra tus datos</p>
    </div>
    
    <div class="row">
        <div class="col-sm-3">
            <a href="{{route('jugadores')}}" class="btn btn-success btn-lg">
                Jugadores
            </a>            
        </div>
        <div class="col-sm-3">
            <a href="{{route('entrenadores')}}" class="btn btn-success btn-lg">
                Entrenadores
            </a>
        </div>    
        <div class="col-sm-3">
            <a href="{{route('agencias')}}" class="btn btn-success btn-lg">
                Agencias
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{route('clubes')}}" class="btn btn-success btn-lg">
                Clubes
            </a>
        </div>
    </div>     
</div>
<br>
<br>
<br>
<br>
<br>
@endsection  
