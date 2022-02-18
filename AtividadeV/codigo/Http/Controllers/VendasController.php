<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;

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

    public function store(Request $request){

            $Venda = new Venda();
            $Venda->descontototal=$request->descontototal;
            $Venda->descontoacerto=$request->descontoacerto;
            $Venda->data_venda=$request->data_venda;
            $Venda->id_clientes=$request->id_clientes;
            $Venda->save();
    }
}
