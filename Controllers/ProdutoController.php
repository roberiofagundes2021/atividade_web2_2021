<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //

    public function create(){
        $Categorias = Categoria::get();
        $Marcas = Marca::get();
        return view('produtos.create',compact('Categorias','Marcas'));
    }

    public function index(){
        $Produtos=Produto::all();
        return view('produtos.index',compact('Produtos'));
    }

    public function store(Request $request){

            $Produto = new Produto();
            $Produto->nomedoproduto=$request->nomedoproduto;
            $Produto->icms=$request->icms;
            $Produto->ipi=$request->ipi;
            $Produto->frete=$request->frete;
            $Produto->valornafabrica=$request->valornafabrica;
            $Produto->valordecompra=$request->valordecompra;
            $Produto->lucro=$request->lucro;
            $Produto->valordevenda=$request->valordevenda;
            $Produto->desconto=$request->desconto;
            $Produto->quantidade=$request->quantidade;
            $Produto->datavencimento=$request->datavencimento;
            $Produto->id_categorias=$request->id_categorias;
            $Produto->id_marcas=$request->id_marcas;
            $Produto->save();
    }
}
