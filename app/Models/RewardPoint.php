<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RewardPoint extends Model
{
    protected $table = 'reward_points';

    public $timestamps = false;

    protected $casts = [
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
