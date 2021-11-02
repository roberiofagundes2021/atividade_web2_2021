<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itens_Vendas extends Model
{
    use HasFactory;
    protected $table="itens_vendas";
    protected $guarded =[];

    public function vendas(){
        return $this->hasMany(Venda::class, 'id_vendas', 'id_itens__vendas');
    }

     public function produto(){
        return $this->hasMany(Produto::class, 'id_produto', 'id_itens__vendas');
    }
}
