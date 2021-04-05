<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    public function index()
    {
        return view('entrenador');
    }

    public function datosEntrenador(Request $request)
    {
        $request->validate([

            
            'nombresEntrenador'=> 'required',
            'apellidoPaternoEntrenador'=>'required',            
            "emailEntrenador"=>'required',
            "telefonoEntrenador"=>'required',
            "passwordEntrenador"=>'required'

        ]);

        $entrenador = new Entrenador();

        $entrenador ->nombres = $request->nombresEntrenador;
        $entrenador ->apellido_paterno = $request->apellidoPaternoEntrenador;
        $entrenador ->apellido_materno	= $request->apellidoMaternoEntrenador;              
        $entrenador ->fecha_nacimiento = $request->nacimientoEntrenador;        
        $entrenador ->club_actual	= $request->clubEntrenador;
        $entrenador ->fecha_fin_contrato	= $request->finContratoEntrenador;
        $entrenador ->sitio_web = $request->emailEntrenador;
        $entrenador ->agente = $request->agenteEntrenador;        
        $entrenador ->email = $request->emailEntrenador;
        $entrenador ->telefono = $request->telefonoEntrenador;
        $entrenador ->password = $request->passwordEntrenador;        
        $entrenador ->remember_token = $request->rememberEntrenador;


        $entrenador->save();


        return redirect()->route('mostrarEntrenador', $entrenador);
    }

    public function show()
    {    
        return view('mostrarEntrenador');
    }

    public function editar()
    {    
        return view('editarEntrenador');
    }


}
