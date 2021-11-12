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

    public function edit($id){
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }

     public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_token'));
        return redirect('index/cliente')->with('msg', 'alteração realdizado com sucesso');
        
    }

     


    public function store(Request $request){

            $Cliente = new Cliente();
            $Cliente->nome=$request->nome;
            $Cliente->debito=$request->debito;
            $Cliente->cpf=$request->cpf;
            $Cliente->rg=$request->rg;
            $Cliente->datanascimento=$request->datanascimento;
             $Cliente->debito=$request->debito;
             $Cliente->sexo=$request->sexo;
            $Cliente->timestamps=$request->timestamps;
            $Cliente->save();
    }

    public function destroy($id){
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return view('clientes.index');
    }
}
