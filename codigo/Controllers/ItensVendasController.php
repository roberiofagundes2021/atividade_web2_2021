<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Produto;
use App\Models\Itens_Vendas;

class ItensVendasController extends Controller
{
    //

    public function create(){
        $Vendas = Venda::get();
        $Produtos = Produto::get();
        return view('itens_vendas.create',compact('Vendas','Produtos'));
    }

    public function index(){
        $Itens_Vendas = Itens_Vendas::all();
        return view('itens_vendas.index',compact('Itens_Vendas'));

    }

    public function edit($id){
        $Itens_Vendas = Itens_Vendas::findorFail($id);
        return view('itens_vendas.edit',['Itens_Vendas'=>$Itens_Vendas]);
    }

     public function update(Request $request){
        Itens_Vendas::find($request->id)->update($request->except('_token'));
        return redirect('index/itensVenda')->with('msg', 'alteração realdizado com sucesso');
        
    }

    public function destroy($id){
        $Itens_Vendas=Itens_Vendas::findOrFail($id);
        $Itens_Vendas->delete();
        return view('itens_vendas.index');
    }


    public function store(Request $request){

            $Itens_Vendas = new Itens_Vendas();
            $Itens_Vendas->quantidade_itens=$request->quantidade_itens;
            $Itens_Vendas->id=$request->id;
            $Itens_Vendas->produto_id=$request->produto_id;
            $Itens_Vendas->valor=$request->valor;
            $Itens_Vendas->save();
    }
}

