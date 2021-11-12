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

    public function edit($id){
        $Produtos = Produto::findorFail($id);
        return view('produtos.edit',['Produtos'=>$Produtos]);
    }

    public function update(Request $request){
        produto::find($request->id)->update($request->except('_token'));
        return redirect('index/produto')->with('msg', 'alteração realdizado com sucesso');
        
    }

    public function index(){
        $Produtos=Produto::all();
        return view('produtos.index',compact('Produtos'));
    }

    public function destroy($id){
        $Produto=Produto::findOrFail($id);
        $Produto->delete();
        return view('Produto.index');
    }

    public function store(Request $request){

            $Produto = new Produto();
            $Produto->nome=$request->nome;
            $Produto->icms=$request->icms;
            $Produto->ipi=$request->ipi;
            $Produto->frete=$request->frete;
            $Produto->valornafabrica=$request->valornafabrica;
            $Produto->valordecompra=$request->valordecompra;
            $Produto->lucro=$request->lucro;
            $Produto->valorvenda=$request->valordevenda;
            $Produto->desconto=$request->desconto;
            $Produto->quantidade=$request->quantidade;
            $Produto->categoria_id=$request->categoria_id;
            $Produto->marca_id=$request->marca_id;
            $Produto->datavencimento=$request->datavencimento;
            $Produto->save();
    }
}
