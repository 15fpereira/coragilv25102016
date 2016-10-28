<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Categoria
 *
 * @property integer $id
 * @property string $nome
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Produto[] $produto
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categoria whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Categoria whereNome($value)
 */
	class Categoria extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fornecedor
 *
 * @property integer $id
 * @property string $cnpj
 * @property string $rasaoSocial
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pedido[] $pedidos
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fornecedor whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fornecedor whereCnpj($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fornecedor whereRasaoSocial($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fornecedor whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fornecedor whereUpdatedAt($value)
 */
	class Fornecedor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pedido
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Fornecedor[] $fornecedores
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Pedido whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Pedido whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Pedido whereUpdatedAt($value)
 */
	class Pedido extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Produto
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Categoria $categoria
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Produto whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Produto whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Produto whereDescricao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Produto whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Produto whereUpdatedAt($value)
 */
	class Produto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

