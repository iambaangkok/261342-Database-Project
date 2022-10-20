<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Productline
 * 
 * @property string $productLine
 * @property string|null $textDescription
 * @property string|null $htmlDescription
 * @property string|null $image
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Productline extends Model
{
	protected $table = 'productlines';
	protected $primaryKey = 'productLine';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'textDescription',
		'htmlDescription',
		'image'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'productLine');
	}
}
