<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'tbl_city';

    protected $primaryKey = 'city_id';

    public $timestamps = false;
}
