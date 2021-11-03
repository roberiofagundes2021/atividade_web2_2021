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


    public function store(Request $request){

            $Itens_Vendas = new Itens_Vendas();
            $Itens_Vendas->quantidade_itens=$request->quantidade_itens;
            $Itens_Vendas->id_vendas=$request->id_vendas;
            $Itens_Vendas->id_produtos=$request->id_produtos;
            $Itens_Vendas->save();
    }
}

