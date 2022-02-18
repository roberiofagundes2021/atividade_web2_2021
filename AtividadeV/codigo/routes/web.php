<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensEntradasController;
use App\Http\Controllers\ItensVendasController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/layout', function () {
    return view('layouts.main');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes',[ClienteController::class, 'show']);

Route::get('/parametros', function (){
    $nome="Fabio";
    $idade="30";

    return view ('aluno',
    [
        'pnome'=> $nome,
        'pidade'=>$idade,
        'pprofissao'=>"programador"
    ]);
});


//paramentro id opcional
Route::get('/popcional/{id}', function($id){
    return view('aluno',['id'=> $id]);
});

//parametro id obrigatorio
Route::get('/popcional/{id?}', function($id){
    return view('aluno',['id?'=> $id]);
});

//parametro com valor padrão
Route::get('/popcional/{id?}', function($id=1){
    return view('aluno',['id'=> $id]);
});

//parametro com valor padrão diferente de null
Route::get('/popcional/{id?}', function($id=null){
    return view('aluno',['id'=> $id]);
});

//Utilização dos query params
Route::get('/queryparams', function(){
    //acessa os paramentros vindos do navegador pelo metodo
    $busca = request('pesquisa');
    return view('contato',['pesquisa'=>$pesquisa]);
});

Route::get('/clientes/create',[ClienteController::Class, 'create'])->name('clientes.create');
Route::get('/clientes/edit',[ClienteController::Class, 'edit'])->name('clientes.edit');
Route::get('/clientes/update/{id}',[ClienteController::Class, 'update'])->name('clientes.update');

Route::get('/index/categoria',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('/create/categoria',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('/storecategoria',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('/categoria/edit/{id_categorias}',[CategoriaController::class,'edit'])->name('categoria.edit');

Route::put('/categoria/update/{id_categorias}',[CategoriaController::class,'update'])->name('categoria.update');




Route::get('/create/cliente',[ClienteController::class,'create'])->name('cliente.create');
Route::post('/storecliente',[ClienteController::class,'store'])->name('cliente.store');
Route::get('/index/cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::delete('/cliente/{id_cliente}',[CategoriaController::class,'destroy'])->name('cliente.delete');


Route::get('/create/entradas',[EntradaController::class,'create'])->name('entradas.create');
Route::post('/storeentradas',[EntradaController::class,'store'])->name('entradas.store');
Route::get('index/entrada',[EntradaController::class,'index'])->name('entrada.index');
Route::delete('/entrada/{id_entrada}',[CategoriaController::class,'destroy'])->name('entrada.delete');



Route::get('/create/fornecedor',[FornecedorController::class,'create'])->name('fornecedor.create');
Route::post('/storefornecedor',[FornecedorController::class,'store'])->name('fornecedor.store');
Route::get('index/fornecedor',[FornecedorController::class,'index'])->name('fornecedor.index');
Route::delete('/fornecedor/{id_fornecedor}',[CategoriaController::class,'destroy'])->name('fornecedor.delete');



Route::get('/create/itensentradas',[ItensEntradasController::class,'create'])->name('itensentradas.create');
Route::post('/storeitensentradas',[ItensEntradasController::class,'store'])->name('itensentradas.store');
Route::get('index/itensentradas',[ItensEntradasController::class,'index'])->name('ItensEntradasController.index');
Route::delete('/cliente/{id_cliente}',[CategoriaController::class,'destroy'])->name('cliente.delete');



Route::get('/create/itensvendas',[ItensVendasController::class,'create'])->name('itensvendas.create');
Route::post('/storeitensvendas',[ItensVendasController::class,'store'])->name('itensvendas.store');
Route::get('index/itensVenda',[ItensVendasController::class,'index'])->name('itensVendas.index');

Route::get('/create/marca',[MarcaController::class,'create'])->name('marca.create')->name('marca.create');
Route::post('/storemarca',[MarcaController::class,'store'])->name('marca.store');
Route::get('index/marca',[MarcaController::class,'index'])->name('marca.index');

Route::get('/create/produto',[ProdutoController::class,'create'])->name('produto.create');
Route::post('/storeproduto',[ProdutoController::class,'store'])->name('produto.store');
Route::get('index/produto',[ProdutoController::class,'index'])->name('produto.index');

Route::get('/create/vendas',[VendasController::class,'create'])->name('vendas.create');
Route::post('/storevendas',[VendasController::class,'store'])->name('vendas.store');
Route::get('index/vendas',[VendasController::class,'index'])->name('vendas.index');
