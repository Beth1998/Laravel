<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; //Llamar al modelo

class ClienteController extends Controller
{
    public function index(){
        //$getCliente = Cliente::all(); //Llamar la informacion
        //dd($getCliente);
        return view('layouts.admin');//, compact('getCliente')); //Welcome es el nombre de la view que vamos a abrir //compact me permite mandar inf desde el front al back
    }

    public function guardar(Request $request){
        //dd($request); //funcion dd me permite verificar en un terminal los datos antes de mandar a la base de datos
        //dd($request->nombre); // Para mostrar un dato en especifico
        Cliente::create($request->all()); //Insertar informacion
        return redirect()->to('/informacion');
    }

    public function informacion(){
        $getCliente = Cliente::all();
        return view('informacion', compact('getCliente'));
    }

    public function editar($id){
        //dd($id);
        $editCliente = Cliente::where('id', $id)->firstOrFail();
       //dd($editCliente);
        return view('editarCliente', compact('editCliente'));
    }

    public function actualizar(Request $request, $id){
        //dd($id,$request->nombre, $request->apellido);
        $actualiCliente = Cliente::findOrFail($id);
        $requestCliente = $request->all();
        $actualiCliente->update($requestCliente);
        return redirect()->to('/informacion');
    }

    public function eliminar ($id){
        //dd($id);
        $eliminarCliente = Cliente::findOrFail($id);
        $eliminarCliente->delete();
        return redirect()->to('/informacion');
    }

    public function adminCompu(){
        return view ('layouts.admin.administracion');
    }
}