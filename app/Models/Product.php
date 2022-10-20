<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property string $productCode
 * @property string $productName
 * @property string $productLine
 * @property string $productScale
 * @property string $productVendor
 * @property string $productDescription
 * @property int $quantityInStock
 * @property float $buyPrice
 * @property float $MSRP
 * 
 * @property Productline $productline
 * @property Collection|Orderdetail[] $orderdetails
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'productCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantityInStock' => 'int',
		'buyPrice' => 'float',
		'MSRP' => 'float'
	];

	protected $fillable = [
		'productName',
		'productLine',
		'productScale',
		'productVendor',
		'productDescription',
		'quantityInStock',
		'buyPrice',
		'MSRP'
	];

	public function productline()
	{
		return $this->belongsTo(Productline::class, 'productLine');
	}

	public function orderdetails()
	{
		return $this->hasMany(Orderdetail::class, 'productCode');
	}
}
