<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = [
        'quantidade'
    ];
    public function fornecedores()
    {
        return $this->belongsToMany(Fornecedor::class);
    }
}
