<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdrawal extends Model
{
    protected $table = 'withdrawals';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
        'dateconfirmed' => 'datetime',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
