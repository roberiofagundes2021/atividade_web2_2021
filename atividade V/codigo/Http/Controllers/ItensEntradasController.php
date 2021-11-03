<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntradas;
use App\Models\Produto;
use App\Models\Entrada;

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


    public function store(Request $request){

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
