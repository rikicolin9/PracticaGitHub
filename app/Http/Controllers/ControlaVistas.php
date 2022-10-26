<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validaciones;
use Illuminate\Http\Request;

class ControlaVistas extends Controller
{
    public function UsaRecordatorio(Validaciones $req){
        return redirect('Registro')->with('echo','Se guardo Correcto');


    }

    public function verIngresar(){
        return view('registro');
        
    }

    public function verRecordatorios(){

        return view('recordatorios');
    }
}
