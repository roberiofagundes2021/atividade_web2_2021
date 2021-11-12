<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){

    $categorias = Categoria::all();

    return view('categoria.index',compact('categorias'));

   }

    public function create(){
        return view('categoria.create');
    }

    public function edit($id){
        $categoria = Categoria::findorFail($id);
        return view('categoria.edit',['categoria'=>$categoria]);
    }

      public function update(Request $request){
        Categoria::find($request->id)->update($request->except('_token'));
        return redirect('index/categorias')->with('msg', 'alteração realdizado com sucesso');
        
    }
  

    public function store(Request $request){

            $Categoria = new Categoria();
            $Categoria->nome=$request->nome;
            $Categoria->timestamps=$request->timestamps;
            $Categoria->save();
    }


    public function destroy($id)
    {
      Categoria::findorFail($id)->delete();
      return redirect('categoria.index')->with('msg', 'categoria apagada');
    }

    public function show($id){
        if ($id) {
            $categoria = Categoria::where('id',$id)->get();
            }else{
                    $categoria= Categoria::all();
                }
                return view('categoria.show',compact('Categoria'));
            
        }
    

   
}
