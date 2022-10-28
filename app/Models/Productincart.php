<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productincart extends Model
{
    protected $table = 'productincarts';
	protected $primaryKey = 'id';
	public $incrementing = true;
	public $timestamps = false;

	protected $fillable = [
		'cartid',
		'productCode',
		'quantity'
	];

	public function carts()
	{
		return $this->hasMany(Cart::class, 'cartid');
	}

	public function products()
	{
		return $this->hasMany(Order::class, 'productCode');
	}

	// public function payments()
	// {
	// 	return $this->hasMany(Payment::class, 'customerNumber');
	// }
}
