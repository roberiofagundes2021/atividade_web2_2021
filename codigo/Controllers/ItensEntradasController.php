<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntradas;
use App\Models\Produto;
use App\Models\Entrada;

use App\Http\Requests\StoreItemEntradaRequest;

class ItensEntradasController extends Controller
{
    //
    public function create(){
        $Entradas = Entrada::get();
        $Produtos = Produto::get();
        return view('itens_entradas.create',compact('Entradas','Produtos'));
    }

    public function index(){
        $ItensEntradas = ItensEntradas::all();
        return view('itens_entradas.index',compact('ItensEntradas'));
    }

     public function edit($id){
        $ItensEntradas = ItensEntradas::findorFail($id);
        return view('itens_entradas.edit',['ItensEntradas'=>$ItensEntradas]);
    }

     public function update(Request $request){
        ItensEntradas::find($request->id)->update($request->except('_token'));
        return redirect('index/itensentradas')->with('msg', 'alteração realdizado com sucesso');
        
    }

    public function destroy($id){
        $ItensEntradas=ItensEntradas::findOrFail($id);
        $ItensEntradas->delete();
        return view('itensentradas.index');
    }


    public function store(StoreItemEntradaRequest $request){

            $ItensEntradas = new ItensEntradas();
            $ItensEntradas->precocompra=$request->precocompra;
            $ItensEntradas->quantidade=$request->quantidade;
            $ItensEntradas->unidade=$request->unidade;
            $ItensEntradas->ipi=$request->ipi;
            $ItensEntradas->frete=$request->frete;
            $ItensEntradas->icms=$request->icms;
            $ItensEntradas->id_entradas=$request->id_entradas;
            $ItensEntradas->id_produtos=$request->id_produtos;
            $ItensEntradas->save();
    }
}
