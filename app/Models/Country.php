<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = 'tbl_country';

    protected $primaryKey = 'country_id';

    public $timestamps = false;

    protected $fillable = [
        'country_name'
    ];
}
