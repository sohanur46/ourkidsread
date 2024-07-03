<?php

namespace App\Models;

use App\Enums\MatchStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Rbmatch extends Model
{
    public $table = 'tbl_reading_buddy_match_detail';

    protected $fillable = [
        'reader_id',
        'child_id',
        'match_date',
        'zoomsession_id',
        'child_confirm',
        'reader_confirm',
        'child_schedule_id',
        'sched_availability_id'
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class, 'child_id', 'child_id');
    }

    public function reader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reader_id');
    }

    public function zoom(): BelongsTo
    {
        return $this->belongsTo(Zoomsession::class, 'zoomsession_id', 'zoom_session_ID');
    }

    public function availability(): BelongsTo
    {
        return $this->belongsTo(Availablesession::class, 'sched_availability_id', 'sched_availability_id');
    }
}
