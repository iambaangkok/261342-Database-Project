<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $customerNumber
 * @property string $customerName
 * @property string $contactLastName
 * @property string $contactFirstName
 * @property string $phone
 * @property string $addressLine1
 * @property string|null $addressLine2
 * @property string $city
 * @property string|null $state
 * @property string|null $postalCode
 * @property string $country
 * @property int|null $salesRepEmployeeNumber
 * @property float|null $creditLimit
 * 
 * @property Employee|null $employee
 * @property Collection|Order[] $orders
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';
	protected $primaryKey = 'customerNumber';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customerNumber' => 'int',
		'salesRepEmployeeNumber' => 'int',
		'creditLimit' => 'float'
	];

	protected $fillable = [
		'customerName',
		'contactLastName',
		'contactFirstName',
		'phone',
		'addressLine1',
		'addressLine2',
		'city',
		'state',
		'postalCode',
		'country',
		'salesRepEmployeeNumber',
		'creditLimit'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'salesRepEmployeeNumber');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'customerNumber');
	}

	public function payments()
	{
		return $this->hasMany(Payment::class, 'customerNumber');
	}
}
