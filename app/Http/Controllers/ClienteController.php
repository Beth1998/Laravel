<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        return view('cliente'); //Welcome es el nombre de la view que vamos a abrir
    }

    public function guardar(Request $request){
        
        //dd($request); //funcion dd me permite verificar en un terminal los datos antes de mandar a la base de datos

        Cliente::create($request->all());
        return view('cliente');
    }
}