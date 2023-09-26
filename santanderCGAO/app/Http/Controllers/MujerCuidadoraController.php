<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MujerCuidadoraController extends Controller
{
    public function index(){

        $datos=DB::select('select * from mujerCuidadora');
        return view('mujerCuidadora')->with('datos',$datos);
    }
    
    public function create(Request $request){
        try
        {
            $sql=DB::insert("insert into mujerCuidadora(idMujer, tipoDocMujer, numeroDocMujer, nombreMujer, apellidoMujer, telefonoMujer, correoMujer, ocupacionMujer)
            values(Null,?,?,?,?,?,?,?)",[
                $request->idMujer,
                $request->tipoDocMujer,
                $request->numeroDocMujer,
                $request->nombreMujer,
                $request->apellidoMujer,
                $request->telefonoMujer,
                $request->correoMujer,
                $request->ciudadMujer,
                $request->direccionMujer,
                $request->ocupacionMujer

            ]);
        }
        catch (\Throwable $e)
        {
            
        }
    }

}
