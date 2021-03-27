@extends('layout.plantilla')

@section('title','Inicio')
    
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12" id="Fondo">
            <div class="text-center">
                <br>
                <h1>TOTALGES</h1> 
                <img src="futbol.jpg">
            </div>
        </div>
    </div>
    <br>
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
