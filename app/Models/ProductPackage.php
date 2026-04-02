<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPackage extends Model
{
    protected $table = 'product_packages';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'status' => 'boolean',
        'show_order' => 'boolean',
    ];
}
