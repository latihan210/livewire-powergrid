<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseOrderItem extends Model
{
    protected $table = 'purchase_order_items';

    public $timestamps = false;

    protected $casts = [
        'dateexpired' => 'date',
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
    ];

    public function purchaseOrder(): BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class, 'id_purchase_order');
    }
}
