<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'jpb_supplier';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'status' => 'boolean',
    ];
}
