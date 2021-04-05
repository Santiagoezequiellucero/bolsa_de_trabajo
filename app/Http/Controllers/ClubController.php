<?php

namespace App\Http\Controllers;


use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        return view('club');
    }

    public function datosClub(Request $request)
    {
        $request->validate([

            
            'nombresClub'=> 'required',
            'paisClub'=>'required',            
            "emailClub"=>'required',
            "telefonoClub"=>'required',
            "WebClub"=>'required',
            "passwordClub"=>'required'

        ]);

        $club = new Club();

        $club ->nombres = $request->nombresClub; 
        $club ->pais = $request->paisClub; 
        $club ->email = $request->emailClub;
        $club ->telefono = $request->telefonoClub;       
        $club ->sitio_web = $request->emailClub;           
        $club ->password = $request->passwordClub;        
        $club ->remember_token = $request->rememberClub;


        $club->save();


        return redirect()->route('mostrarClub', $club);
    }
}
