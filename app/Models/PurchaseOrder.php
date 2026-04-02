<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    public $timestamps = false;

    protected $casts = [
        'trans_date' => 'date',
        'due_date' => 'date',
        'delivery_date' => 'date',
        'dateexpired' => 'date',
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'dateconfirmed' => 'datetime',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseOrderItem::class, 'id_purchase_order');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
