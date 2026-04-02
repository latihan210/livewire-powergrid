<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShopOrder extends Model
{
    protected $table = 'shop_orders';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'dateconfirmed' => 'datetime',
        'dateexpired' => 'datetime',
        'pin_transfer' => 'boolean',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member');
    }

    public function items(): HasMany
    {
        return $this->hasMany(ShopOrderItem::class, 'id_shop_order');
    }
}
