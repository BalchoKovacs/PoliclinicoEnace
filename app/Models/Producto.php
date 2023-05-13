<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $codigo
 * @property int $stock
 * @property int $ventas
 * @property string $descripcion
 * @property float $precio_compra
 * @property float $precio_venta
 * @property string $lote
 * @property Carbon $fecha_caducidad
 * @property int $id_usuario
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Producto extends Model
{
	use SoftDeletes;
	protected $table = 'producto';

	protected $casts = [
		'stock' => 'int',
		'ventas' => 'int',
		'precio_compra' => 'float',
		'precio_venta' => 'float',
		'fecha_caducidad' => 'datetime',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'codigo',
		'stock',
		'ventas',
		'descripcion',
		'precio_compra',
		'precio_venta',
		'lote',
		'fecha_caducidad',
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
