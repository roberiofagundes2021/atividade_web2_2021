<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Http\Requests\StoreEntradaRequest;

class EntradaController extends Controller
{
    //
     public function create(){
        $Fornecedors = Fornecedor::get();
        return view('entradas.create',compact('Fornecedors'));
    }

    public function edit($id){
        $Entrada = Entrada::findorFail($id);
        return view('entradas.edit',['Entrada'=>$Entrada]);
    }

     public function update(Request $request){
        Entrada::find($request->id)->update($request->except('_token'));
        return redirect('index/entrada')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Entrada::findorFail($id)->delete();
      return redirect('entradas.index')->with('msg', 'categoria apagada');
    }

    public function index(){
        $Entradas = Entrada::all();
        return view('entradas.index',compact('Entradas'));
    }


    public function store(StoreEntradaRequest $request){

            $Entrada = new Entrada();
            $Entrada->valortotaldanota =$request->valortotaldanota ;
            $Entrada->dataentrada=$request->dataentrada;
            $Entrada->fornecedor_id=$request->fornecedor_id;
            $Entrada->timestamps=$request->timestamps;
            $Entrada->save();
    }


}
