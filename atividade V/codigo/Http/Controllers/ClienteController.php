<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::all();

        return view('clientes.index',compact('clientes'));
       }


    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){

            $Cliente = new Cliente();
            $Cliente->nome=$request->nome;
            $Cliente->endereco=$request->endereco;
            $Cliente->debito=$request->debito;
            $Cliente->timestamps=$request->timestamps;
            $Cliente->save();
    }
}
