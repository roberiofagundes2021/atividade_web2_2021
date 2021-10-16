<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //$clientes = model
    public function show(){
        $clientes = Cliente::all();
        echo $clientes;
    }
}
