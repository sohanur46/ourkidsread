<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Availability extends Model
{
    public $table = 'tbl_sched_availability';

    protected $primaryKey = 'sched_availability_id';

    public $timestamps = false;
}
