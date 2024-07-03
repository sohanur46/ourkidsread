<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeofday extends Model
{
    public $table = 'tbl_session_time_of_day';

    protected $primaryKey = 'session_time_of_day_id';

    public $timestamps = false;
}
