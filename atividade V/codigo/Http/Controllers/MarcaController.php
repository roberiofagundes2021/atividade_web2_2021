<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;

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
    public function store(Request $request){

            $Marca = new Marca();
            $Marca->nome=$request->nome;
            $Marca->save();
    }
}
