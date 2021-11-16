<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMarcaRequest;

class MarcaController extends Controller
{
    //
  public function create(){

        return view('marcas.create');
    }

 public function index(){
     $Marcas=Marca::all();
     return view('marcas.index',compact('Marcas'));
 }

public function edit($id){
        $Marcas = Marca::findorFail($id);
        return view('marcas.edit',['Marcas'=>$Marcas]);
    }

public function update(Request $request){
        Marca::find($request->id)->update($request->except('_token'));
        return redirect('index/marcas')->with('msg', 'alteração realdizado com sucesso');
        
}
    public function store(StoreMarcaRequest $request){

            $Marca = new Marca();
            $Marca->nome=$request->nome;
            $Marca->save();
    }

    public function destroy($id){
        $Marca=Marca::findOrFail($id);
        $Marca->delete();
        return view('fornecedor.index');
    }
}
