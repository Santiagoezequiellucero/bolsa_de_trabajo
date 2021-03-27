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
            'posicion'=>'required',
            "emailJugador"=>'required',
            "telefonoJugador"=>'required',
            "passwordJugador"=>'required'

        ]);
        

        $jugador = new Jugador();

        $jugador ->nombres = $request->nombresJugador;
        $jugador ->apellido_paterno = $request->apellidoPaternoJugador;
        $jugador ->fecha_nacimiento = $request->nacimientoJugador;
        $jugador ->pierna_habil	= $request->piernaHabil;
        $jugador ->email = $request->emailJugador;
        $jugador ->telefono = $request->telefonoJugador;
        $jugador ->password = $request->passwordJugador;


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
