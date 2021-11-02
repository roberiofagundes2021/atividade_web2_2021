<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntradas extends Model
{
    use HasFactory;
    protected $table="itens_entradas";
    protected $guarded = [];

       public function entrada(){
         return $this->hasMany(Entrada::class, 'id_entradas', 'id_itens_entradas');
    }
}
