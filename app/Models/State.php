<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $table = 'tbl_state';

    protected $primaryKey = 'state_id';
}
