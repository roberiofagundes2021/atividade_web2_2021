<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Fornecedor;
use App\Models\Produto;

class EntradaController extends Controller
{
    //
     public function create(){
        $Fornecedors = Fornecedor::get();
        return view('entradas.create',compact('Fornecedors'));
    }

    public function index(){
        $Entradas = Entrada::all();
        return view('entradas.index',compact('Entradas'));
    }


    public function store(Request $request){

            $Entrada = new Entrada();
            $Entrada->valortotaldanota =$request->valortotaldanota ;
            $Entrada->dataentrada=$request->dataentrada;
            $Entrada->id_fornecedors=$request->id_fornecedors;
            $Entrada->timestamps=$request->timestamps;
            $Entrada->save();
    }
}
