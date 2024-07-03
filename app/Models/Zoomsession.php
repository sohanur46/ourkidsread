<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zoomsession extends Model
{
    public $table = 'tbl_zoom_session';

    protected $primaryKey = 'zoom_session_ID';

    public $timestamps = false;

    protected $fillable = [
        'zoom_session_title',
        'zoom_session_URL',
        'zoom_session_account_name',
        'weekday_id',
        'zoom_session_start_time',
        'zoom_session_end_time',
        'is_available_flag',
        'zoom_session_audit_id',
        'create_date'
    ];
}
