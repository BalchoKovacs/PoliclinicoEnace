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
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property int $id_tipo_documento
 * @property string $numero_documento
 * @property Carbon $fecha_nacimiento
 * @property string $telefono
 * @property string $email
 * @property string $direccion
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	use SoftDeletes;
	protected $table = 'cliente';

	protected $casts = [
		'id_tipo_documento' => 'int',
		'fecha_nacimiento' => 'datetime'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'id_tipo_documento',
		'numero_documento',
		'fecha_nacimiento',
		'telefono',
		'email',
		'direccion'
	];

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_cliente');
	}
}
