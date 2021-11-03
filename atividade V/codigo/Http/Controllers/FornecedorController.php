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

    public function store(Request $request){

            $Fornecedor = new Fornecedor();
            $Fornecedor->nome = $request->nome;
            $Fornecedor->CNPJ=$request->CNPJ;
            $Fornecedor->timestamps=$request->timestamps;
            $Fornecedor->save();
    }
}
