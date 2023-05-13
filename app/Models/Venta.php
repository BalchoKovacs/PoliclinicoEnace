<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venta
 * 
 * @property int $id
 * @property string $codigo
 * @property Carbon $fecha
 * @property int $id_cliente
 * @property int $id_metodo_pago
 * @property float $impuesto
 * @property float $descuento
 * @property float $sub_total
 * @property float $adicional
 * @property float $total
 * @property int $id_usuario
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Usuario $usuario
 * @property Cliente $cliente
 *
 * @package App\Models
 */
class Venta extends Model
{
	use SoftDeletes;
	protected $table = 'ventas';

	protected $casts = [
		'fecha' => 'datetime',
		'id_cliente' => 'int',
		'id_metodo_pago' => 'int',
		'impuesto' => 'float',
		'descuento' => 'float',
		'sub_total' => 'float',
		'adicional' => 'float',
		'total' => 'float',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'codigo',
		'fecha',
		'id_cliente',
		'id_metodo_pago',
		'impuesto',
		'descuento',
		'sub_total',
		'adicional',
		'total',
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}
}
