<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product มีอะไรบ้าง
 */
class Products extends Model
{

    // protected $primaryKey = 'productCode';
    // protected $keyType = 'BTREE';
    // protected $connection = 'sqlite';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    protected $fillable = [
        'productCode',
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescrition',
        'quantityInStock',
        'buyPrice',
        'MSRP'
        ];
}
