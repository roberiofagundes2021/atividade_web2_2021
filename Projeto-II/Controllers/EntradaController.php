<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
   //
    //
    public function create(){
    $Entrada = Entrada::get();
    return view('Entrada.create',compact('Entrada'));
    }

    public function edit($id){
        $Entrada = Entrada::findorFail($id);
        return view('Entrada.edit',['Entrada'=>$Entrada]);
    }

     public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_token'));
        return redirect('index/Entrada')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      EnderecoCliente::findorFail($id)->delete();
      return redirect('Entrada.index')->with('msg', 'Endereco Entrada apagada');
    }

    public function index(){
        $Entrada = Entrada::all();
        return view('Entrada.index',compact('Entrada'));
    }


    public function store(Request $request){

            $Entrada=new Entrada();
            $Entrada->valortotaldanota=$valortotaldanota;
            $Entrada->dataentrada=$request->dataentrada;
            $Entrada->fornecedor_id=$request->fornecedor_id;
            $Entrada->save();
    }
}
