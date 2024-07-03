<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availablesession extends Model
{
    public $table = 'tbl_sched_availability';

    protected $primaryKey = 'sched_availability_id';

    public $timestamps = false;

    protected $fillable = [
        'item_type_id',
        'sched_availability_day',
        'sched_availability_time',
        'create_date',
        'last_updated_date',
        'last_updated_by',
    ];
}
