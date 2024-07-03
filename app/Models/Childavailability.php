<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Childavailability extends Model
{
    public $table = 'tbl_availability_child';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'child_id',
        'week_time',
        'language'
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class, 'child_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
