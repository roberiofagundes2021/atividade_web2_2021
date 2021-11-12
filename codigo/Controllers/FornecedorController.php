<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //
    public function create(){
        $Fornecedors = Fornecedor::get();
        return view('fornecedor.create');
    }

    public function index(){
        $Fornecedors = Fornecedor::all();
        return view('fornecedor.index',compact('Fornecedors'));
    }

    public function edit($id){
        $Fornecedors = Fornecedor::findorFail($id);
        return view('fornecedor.edit',['Fornecedors'=>$Fornecedors]);
    }

     public function update(Request $request){
        Fornecedor::find($request->id)->update($request->except('_token'));
        return redirect('index/fornecedor')->with('msg', 'alteração realdizado com sucesso');
        
    }


    public function store(Request $request){

            $Fornecedor = new Fornecedor();
            $Fornecedor->nome = $request->nome;
            $Fornecedor->CNPJ=$request->CNPJ;
            $Fornecedor->timestamps=$request->timestamps;
            $Fornecedor->save();
    }

     public function destroy($id){
        $Fornecedor=Fornecedor::findOrFail($id);
        $Fornecedor->delete();
        return view('fornecedor.index');
    }
}
