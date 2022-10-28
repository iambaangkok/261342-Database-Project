<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Orderdetail
 * 
 * @property int $orderNumber
 * @property string $productCode
 * @property int $quantityOrdered
 * @property float $priceEach
 * @property int $orderLineNumber
 * 
 * @property Order $order
 * @property Product $product
 *
 * @package App\Models
 */
class Orderdetail extends Model
{
	protected $table = 'orderdetails';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'orderNumber' => 'int',
		'quantityOrdered' => 'int',
		'priceEach' => 'float',
		'orderLineNumber' => 'int'
	];

	protected $fillable = [
		'quantityOrdered',
		'priceEach',
		'orderLineNumber'
	];

	public function order()
	{
		return $this->belongsTo(Order::class, 'orderNumber');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'productCode');
	}
}
