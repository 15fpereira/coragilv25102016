<?php

namespace App\Models;

use App\Models\Produto;
use App\Models\Fornecedor;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    //
    protected $fillable = [
        'quantidade'
    ];

    /**
     * @return BelongsToMany
     */
    public function fornecedores()
    {
        return $this->belongsToMany(Fornecedor::class);
    }

    /**
     * @return BelongsToMany
     */
    public function produtos()
    {
        return $this->belongsToMany(Produto::class,'itensdoPedidos');
    }
}
