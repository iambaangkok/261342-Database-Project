<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Office
 * 
 * @property string $officeCode
 * @property string $city
 * @property string $phone
 * @property string $addressLine1
 * @property string|null $addressLine2
 * @property string|null $state
 * @property string $country
 * @property string $postalCode
 * @property string $territory
 * 
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Office extends Model
{
	protected $table = 'offices';
	protected $primaryKey = 'officeCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'city',
		'phone',
		'addressLine1',
		'addressLine2',
		'state',
		'country',
		'postalCode',
		'territory'
	];

	public function employees()
	{
		return $this->hasMany(Employee::class, 'officeCode');
	}
}
