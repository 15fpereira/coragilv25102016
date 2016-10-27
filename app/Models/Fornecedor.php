<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = [

        'cnpj', 'telefone'
    ];
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
