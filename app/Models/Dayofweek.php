<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dayofweek extends Model
{
    public $table = 'tbl_session_day_of_week';

    protected $primaryKey = 'session_day_of_week_id';

    public $timestamps = false;
}
