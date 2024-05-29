<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesCrontroller extends Controller
{

    public function registrar(){
        return view("clientes.registrar");
    }

    public function editar(){
        return view("clientes.editar");
    }

    public function consultar(){
        $clientes = Clientes::all();
        return view('clientes.consultas',[
            'clientes' => $clientes
        ]);
    }
}
