<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = [

        'cnpj', 'telefone', 'rasao'
    ];
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
