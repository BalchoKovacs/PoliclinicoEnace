<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $usuario
 * @property string $password
 * @property Carbon $last_login
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Producto[] $productos
 * @property Collection|Ventum[] $venta
 *
 * @package App\Models
 */
class Usuario extends Model
{
	use SoftDeletes;
	protected $table = 'usuario';

	protected $casts = [
		'last_login' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'usuario',
		'password',
		'last_login'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_usuario');
	}

	public function venta()
	{
		return $this->hasMany(Ventum::class, 'id_usuario');
	}
}
