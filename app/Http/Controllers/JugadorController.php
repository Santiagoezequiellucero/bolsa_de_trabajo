<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {    
        return view('jugador');
    }

    public function datosJugador(Request $request)
    {
        $request->validate([

            
            'nombresJugador'=> 'required',
            'apellidoPaternoJugador'=>'required',
            'nacimientoJugador'=>'required',
            'piernaHabil'=>'required',
            'posicion'=>'required',//select 2 para la posicion
            "emailJugador"=>'required',
            "telefonoJugador"=>'required',
            "passwordJugador"=>'required'

        ]);
        

        $jugador = new Jugador();

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


        return redirect()->route('mostrarJugador', $jugador);
    }
    

    public function show()
    {    
        return view('mostrarJugador');
    }

    public function editar()
    {    
        return view('editarJugador');
    }


}
