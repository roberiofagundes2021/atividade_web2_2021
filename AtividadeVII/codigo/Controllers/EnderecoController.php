<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEnderecoRequest;


class EnderecoController extends Controller
{
    //
    public function index(){

        $enderecos = Endereco::all();

        return view('enderecos.index',compact('clientes'));
       }


    public function create(){
        return view('enderecos.create');
    }

    public function edit($id){
        $endereco = Endereco::findorFail($id);
        return view('enderecos.edit',['endereco'=>$endereco]);
    }

     public function update(Request $request){
        Endereco::find($request->id)->update($request->except('_token'));
        return redirect('index/enderecos')->with('msg', 'alteração realdizado com sucesso');
        
    }

    public function store(StoreEnderecoRequest $request){

            $endereco = new Endereco();
            $endereco->cliente_id=$request->cliente_id;
            $endereco->estado=$request->estado;
            $endereco->cidade=$request->cidade;
            $endereco->bairro=$request->bairro;
            $endereco->rua=$request->rua;
            $endereco->numero=$request->numero;
            $endereco->cep=$request->cep;
            $endereco->timestamps=$request->timestamps;
            $endereco->save();
    }

    public function destroy($id){
        $endereco=Endereco::findOrFail($id);
        $endereco->delete();
        return view('enderecos.index');
    }
}
