<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        return view('agencia');
    }

    public function datosAgencia(Request $request)
    {
        $request->validate([

            
            'nombresAgencia'=> 'required',
            'paisAgencia'=>'required',            
            "emailAgencia"=>'required',
            "telefonoAgencia"=>'required',
            "WebAgencia"=>'required',
            "passwordAgencia"=>'required'

        ]);

        $agencia = new Agencia();

        $agencia ->nombres = $request->nombresAgencia; 
        $agencia ->pais = $request->paisAgencia; 
        $agencia ->email = $request->emailAgencia;
        $agencia ->telefono = $request->telefonoAgencia;       
        $agencia ->sitio_web = $request->emailAgencia;           
        $agencia ->password = $request->passwordAgencia;        
        $agencia ->remember_token = $request->rememberAgencia;


        $agencia->save();


        return redirect()->route('mostrarAgencia', $agencia);
    }
}
