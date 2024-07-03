<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $table = 'tbl_school';

    protected $primaryKey = 'school_id';

    protected $fillable = [
        'country_name'
    ];
}
