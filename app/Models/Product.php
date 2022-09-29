<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Product มีอะไรบ้าง
 */
class Products extends Model
{
    protected $fillable = [
        'productCode',
        'productName',
        'productLine',
        'productScale',
        'productvendor',
        'productDescrition',
        'quantityInStock',
        'buyPrice',
        'MSRP'
        ];
}
