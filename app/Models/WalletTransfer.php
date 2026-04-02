<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WalletTransfer extends Model
{
    protected $table = 'wallet_transfers';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'status' => 'boolean',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member_sender');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
