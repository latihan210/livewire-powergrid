<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardConfig extends Model
{
    protected $table = 'reward_configs';

    public $timestamps = false;

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_lifetime' => 'boolean',
        'is_active' => 'boolean',
        'datecreated' => 'datetime',
        'datemodified' => 'datetime',
    ];
}
