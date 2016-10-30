<?php

namespace App\Models;

use App\Models\Categoria;

use App\Models\Pedido;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Produto extends Model
{
    //
    protected $fillable = [

        'categoria_id', 'nome', 'descricao'
    ];

    /**
     * @return BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * @return BelongsToMany
     */
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class,'itensdoPedidos');
    }


}
