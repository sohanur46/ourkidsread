<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Childschedule extends Model
{
    public $table = 'tbl_child_schedule';

    public $timestamps = false;

    protected $fillable = [
        'item_type_id',
        'item_id',
        'child_id',
        'create_date',
        'last_updated_date',
        'last_updated_by'
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class, 'child_id');
    }

    public function availability(): BelongsTo
    {
        return $this->belongsTo(Availablesession::class, 'item_id', 'sched_availability_id')->where('item_type_id', 11);
    }
}
