<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $employeeNumber
 * @property string $lastName
 * @property string $firstName
 * @property string $extension
 * @property string $email
 * @property string $officeCode
 * @property int|null $reportsTo
 * @property string $jobTitle
 * 
 * @property Employee|null $employee
 * @property Office $office
 * @property Collection|Customer[] $customers
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';
	protected $primaryKey = 'employeeNumber';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employeeNumber' => 'int',
		'reportsTo' => 'int'
	];

	protected $fillable = [
		'lastName',
		'firstName',
		'extension',
		'email',
		'officeCode',
		'reportsTo',
		'jobTitle'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'reportsTo');
	}

	public function office()
	{
		return $this->belongsTo(Office::class, 'officeCode');
	}

	public function customers()
	{
		return $this->hasMany(Customer::class, 'salesRepEmployeeNumber');
	}

	public function employees()
	{
		return $this->hasMany(Employee::class, 'reportsTo');
	}
}
