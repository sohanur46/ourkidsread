<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduledAvailability extends Model
{
    public $table = 'tbl_sched_availability';

    protected $primaryKey = 'sched_availability_id';

    public $timestamps = false;
}
