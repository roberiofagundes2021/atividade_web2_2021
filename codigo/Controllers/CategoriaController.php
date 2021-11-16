<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;



class CategoriaController extends Controller
{
    public function index(){

    $categorias = Categoria::all();

    return view('categoria.index',compact('categorias'));

   }

    public function create(){
        return view('categoria.create');
    }

    public function edit($id_categoria){
        $categoria = Categoria::findorFail($id_categoria);
        return view('categoria.edit',['categoria'=>$categoria]);
    }

    public function update(Request $request){
        Categoria::find($request->except('_token'));
        return redirect('categoria/index')->with('msg', 'alteração realizada com sucesso');
    }

    public function store(StoreCategoriaRequest $request){

            $Categoria = new Categoria();
            $Categoria->nome=$request->nome;
            $Categoria->timestamps=$request->timestamps;
            $Categoria->save();
            
    }


   public function destroy($id_categorias){
        $Categoria=Categoria::findOrFail($id_categorias);
        $Categoria->delete();
        return "Produto excluído com sucesso.";
    }

}
