<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class ControladorVista extends Controller
{
    public function procesarFormulario(validadorFormulario $req)
    {
        return redirect()->route('for')->with('confirmacion', 'Recuerdo guardado');
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();
    }

    public function showFormulario()
    {
        return view('Formulario');
    }

    public function showTabla()
    {
        return view('Tabla');
    }

}