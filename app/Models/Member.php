<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    protected $table = 'members';

    protected $casts = [
        'datecreated' => 'datetime',
        'last_login' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sponsorData()
    {
        return $this->belongsTo(Member::class, 'sponsor', 'id');
    }

    public function upline()
    {
        return $this->belongsTo(Member::class, 'parent', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Member::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Member::class, 'parent_id');
    }

    public function show($id)
    {
        $member = Member::with('childrenRecursive')->findOrFail($id);

        return view('members.show', compact('member'));
    }
}
