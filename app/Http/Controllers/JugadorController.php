<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJugador;
use Illuminate\Support\Facades\Storage;

class JugadorController extends Controller
{   


    public function index()
    {   
        $jugadores = Jugador::all();
        return view('mostrarJugador', compact('jugadores'));
    }

    public function create()
    {
        return view('jugadores.create');

    }

    public function store(StoreJugador $request)
    {
        
                $jugador = new Jugador();

        $jugador ->nombres = $request->nombresJugador;
        $jugador ->apellido_paterno = $request->apellidoPaternoJugador;
        $jugador ->apellido_materno	= $request->apellidoMaternoJugador;
        $jugador ->foto_perfil = Storage::put('storage', $request->fotoJugador);      
        $jugador ->fecha_nacimiento = $request->nacimientoJugador;
        $jugador ->nombre_apoderado	= $request->nombresApoderado;
        $jugador ->telefono_apoderado	= $request->telefonoApoderado;
        $jugador ->club_actual	= $request->clubJugador;
        $jugador ->fecha_fin_contrato	= $request->finContratoJugador;
        $jugador ->agente = $request->agenteJugador;
        $jugador ->video1 = $request->videoJugador1;
        $jugador ->video2 = $request->videoJugador2;
        $jugador ->video3 = $request->videoJugador3;
        $jugador ->pierna_habil	= $request->piernaHabil;
        $jugador ->altura = $request->altura;
        $jugador ->posicion	= $request->posicion;
        $jugador ->email = $request->emailJugador;
        $jugador ->telefono = $request->telefonoJugador;
        $jugador ->password = $request->passwordJugador;
        $jugador ->perfil_transfermarkt = $request->TranfermarktJugador;
        $jugador ->perfil_soccerway = $request->SoccerwayJugador;
        $jugador ->remember_token = $request->rememberJugador;

        // return $jugador ->foto_perfil;


        $jugador->save();        
        
        return  redirect()->route('jugadores.show', compact('jugador'));
    }

    public function show(Jugador $jugador)
    {    
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(Jugador $jugador)
    {    
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(StoreJugador $request, Jugador $jugador)
    {    
        $jugador ->nombres = $request->nombresJugador;
        $jugador ->apellido_paterno = $request->apellidoPaternoJugador;
        $jugador ->apellido_materno	= $request->apellidoMaternoJugador;
        $jugador ->foto_perfil = $request->fotoJugador;        
        $jugador ->fecha_nacimiento = $request->nacimientoJugador;
        $jugador ->nombre_apoderado	= $request->nombresApoderado;
        $jugador ->telefono_apoderado	= $request->telefonoApoderado;
        $jugador ->club_actual	= $request->clubJugador;
        $jugador ->fecha_fin_contrato	= $request->finContratoJugador;
        $jugador ->agente = $request->agenteJugador;
        $jugador ->video1 = $request->videoJugador1;
        $jugador ->video2 = $request->videoJugador2;
        $jugador ->video3 = $request->videoJugador3;
        $jugador ->pierna_habil	= $request->piernaHabil;
        $jugador ->altura = $request->altura;
        $jugador ->posicion	= $request->posicion;
        $jugador ->email = $request->emailJugador;
        $jugador ->telefono = $request->telefonoJugador;
        $jugador ->password = $request->passwordJugador;
        $jugador ->perfil_transfermarkt = $request->TranfermarktJugador;
        $jugador ->perfil_soccerway = $request->SoccerwayJugador;
        $jugador ->remember_token = $request->rememberJugador;

        

        $jugador->save();
        
        return  redirect()->route('jugadores.show', compact('jugador'));

    }

    public function destroy(Jugador $jugador){

    }


}
