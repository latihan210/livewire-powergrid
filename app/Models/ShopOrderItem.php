<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopOrderItem extends Model
{
    protected $table = 'shop_order_items';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(ShopOrder::class, 'id_shop_order');
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product');
    }

    public function variant(): BelongsTo
    {
        return $this->belongsTo(ProductVariant::class, 'varian');
    }
}
