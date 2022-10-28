<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
	protected $primaryKey = 'cartid';
	public $incrementing = false;
	public $timestamps = True;
    
    protected $fillable = [
        'id_user'
    ];

    
	public function user()
	{
		return $this->hasOne(User::class, 'id_user');
	}
}
