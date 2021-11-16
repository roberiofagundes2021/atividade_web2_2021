<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;
use App\Http\Requests\StoreVendaRequest;


class VendasController extends Controller
{
    //
    public function create(){
        $Clientes = Cliente::get();
        return view('vendas.create',compact('Clientes'));
    }

    public function index(){
        $Vendas = Venda::all();
        return view('vendas.index',compact('Vendas'));
    }

    public function edit($id){
        $Vendas = Venda::findorFail($id);
        return view('vendas.edit',['Vendas'=>$Vendas]);
    }

    public function update(Request $request){
        Venda::find($request->id)->update($request->except('_token'));
        return redirect('index/vendas')->with('msg', 'alteração realdizado com sucesso');
        
    }

    public function destroy($id){
        $Vendas=Venda::findOrFail($id);
        $Vendas->delete();
        return view('vendas.index');
    }

    public function store(StoreVendaRequest $request){

            $Venda = new Venda();
            $Venda->descontototal=$request->descontototal;
            $Venda->descontoacerto=$request->descontoacerto;
            $Venda->data_venda=$request->data_venda;
            $Venda->cliente_id=$request->cliente_id;
            $Venda->timestamps=$request->timestamps;
            $Venda->save();

            
    }
}
