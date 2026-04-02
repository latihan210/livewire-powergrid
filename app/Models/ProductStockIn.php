<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductStockIn extends Model
{
    protected $table = 'product_stock_ins';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'dateexpired' => 'date',
        'status' => 'boolean',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
