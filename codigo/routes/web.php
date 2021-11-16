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

Route::get('/',function(){
    return view('layouts.main');
});

Route::get('/index/categorias',[CategoriaController::class,'index'])->name('categoria.index');
Route::post('/create/categoria',[CategoriaController::class,'create'])->name('categoria.create');
Route::get('/create/categoria',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('/storecategoria',[CategoriaController::class,'store'])->name('categoria.store');
Route::post('/categoria/edit/{id}',[CategoriaController::class,'edit'])->name('categoria.edit');

Route::get('/categoria/show/{id}',[CategoriaController::class,'show'])->name('categoria.show');
Route::put('/categoria/update/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::delete('/categorias/{id}',[CategoriaController::class, 'destroy'])->name('categoria.delete');


Route::get('/create/cliente',[ClienteController::class,'create'])->name('cliente.create');
Route::post('/create/cliente',[ClienteController::class,'create'])->name('cliente.create');

Route::post('/storecliente',[ClienteController::class,'store'])->name('cliente.store');
Route::get('/index/cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::delete('/cliente/{id}',[ClienteController::class,'destroy'])->name('cliente.delete');
Route::post('/cliente/edit/{id}',[ClienteController::class,'edit'])->name('cliente.edit');
Route::put('/cliente/update/{id}',[ClienteController::class,'update'])->name('cliente.update');


Route::get('/create/entradas',[EntradaController::class,'create'])->name('entradas.create');
Route::post('/create/entradas',[EntradaController::class,'create'])->name('entradas.create');
Route::post('/storeentradas',[EntradaController::class,'store'])->name('entradas.store');
Route::get('index/entrada',[EntradaController::class,'index'])->name('entradas.index');
Route::delete('/entrada/{id}',[EntradaController::class,'destroy'])->name('entradas.delete');
Route::put('/entrada/update/{id}',[EntradaController::class,'update'])->name('entradas.update');
Route::post('/entrada/edit/{id}',[EntradaController::class,'edit'])->name('entradas.edit');

Route::get('/create/endereco',[EnderecoController::class,'create'])->name('enderecos.create');
Route::post('/create/endereco',[EnderecoController::class,'create'])->name('enderecos.create');
Route::post('/storeenderecos',[EnderecoController::class,'store'])->name('enderecos.store');
Route::get('index/enderecos',[EnderecoController::class,'index'])->name('enderecos.index');
Route::delete('/enderecos/{id}',[EnderecoController::class,'destroy'])->name('enderecos.delete');
Route::put('/enderecos/update/{id}',[EnderecoController::class,'update'])->name('enderecos.update');
Route::post('/enderecos/edit/{id}',[EnderecoController::class,'edit'])->name('enderecos.edit');


Route::get('/create/fornecedor',[FornecedorController::class,'create'])->name('fornecedor.create');
Route::post('/create/fornecedor',[FornecedorController::class,'create'])->name('fornecedor.create');
Route::post('/storefornecedor',[FornecedorController::class,'store'])->name('fornecedor.store');
Route::get('index/fornecedor',[FornecedorController::class,'index'])->name('fornecedor.index');
Route::delete('/fornecedors/{id}',[FornecedorController::class, 'destroy'])->name('fornecedors.delete');
Route::put('/fornecedors/update/{id}',[FornecedorController::class,'update'])->name('fornecedors.update');
Route::post('/fornecedors/edit/{id}',[FornecedorController::class,'edit'])->name('fornecedors.edit');


Route::get('/create/itensentradas',[ItensEntradasController::class,'create'])->name('itensentradas.create');
Route::post('/create/itensentradas',[ItensEntradasController::class,'create'])->name('itensentradas.create');
Route::post('/storeitensentradas',[ItensEntradasController::class,'store'])->name('itensentradas.store');
Route::get('index/itensentradas',[ItensEntradasController::class,'index'])->name('ItensEntradas.index');
Route::get('/itensentradas/{id}',[ItensEntradasController::class,'destroy'])->name('itensentradas.delete');
Route::put('/itensentradas/update/{id}',[ItensEntradasController::class,'update'])->name('itensentradas.update');
Route::post('/itensentradas/edit/{id}',[ItensEntradasController::class,'edit'])->name('itensentradas.edit');



Route::get('/create/itensvendas',[ItensVendasController::class,'create'])->name('itensvendas.create');
Route::post('/create/itensvendas',[ItensVendasController::class,'create'])->name('itensvendas.create');
Route::post('/storeitensvendas',[ItensVendasController::class,'store'])->name('itensvendas.store');
Route::get('index/itensVenda',[ItensVendasController::class,'index'])->name('itensVendas.index');
Route::delete('/itensVenda/{id}',[ItensVendasController::class,'destroy'])->name('itensVenda.delete');
Route::put('/itensVenda/update/{id}',[ItensVendasController::class,'update'])->name('itensVenda.update');
Route::post('/itensVenda/edit/{id}',[ItensVendasController::class,'edit'])->name('itensVenda.edit');


Route::get('/create/marca',[MarcaController::class,'create'])->name('marca.create');
Route::post('/create/marca',[MarcaController::class,'create'])->name('marca.create');
Route::post('/storemarca',[MarcaController::class,'store'])->name('marca.store');
Route::get('index/marcas',[MarcaController::class,'index'])->name('marca.index');
Route::delete('/marcas/{marca_id}',[MarcaController::class,'destroy'])->name('marca.delete');
Route::put('/marcas/update/{id}',[MarcaController::class,'update'])->name('marca.update');
Route::post('/marcas/edit/{id}',[MarcaController::class,'edit'])->name('marca.edit');


Route::get('/create/produto',[ProdutoController::class,'create'])->name('produto.create');
Route::post('/create/produto',[ProdutoController::class,'create'])->name('produto.create');
Route::post('/storeproduto',[ProdutoController::class,'store'])->name('produto.store');
Route::get('index/produto',[ProdutoController::class,'index'])->name('produto.index');
Route::delete('/produto/{id}',[ProdutoController::class,'destroy'])->name('produto.delete');
Route::put('/produto/update/{id}',[ProdutoController::class,'update'])->name('produto.update');
Route::post('/produto/edit/{id}',[ProdutoController::class,'edit'])->name('produto.edit');


Route::post('/create/vendas',[VendasController::class,'create'])->name('vendas.create');
Route::get('/create/vendas',[VendasController::class,'create'])->name('vendas.create');
Route::post('/storevendas',[VendasController::class,'store'])->name('vendas.store');
Route::get('index/vendas',[VendasController::class,'index'])->name('vendas.index');
Route::delete('/vendas/{id}',[VendasController::class,'destroy'])->name('vendas.delete');
Route::put('/vendas/update/{id}',[VendasController::class,'update'])->name('vendas.update');
Route::post('/vendas/edit/{id}',[VendasController::class,'edit'])->name('vendas.edit');

