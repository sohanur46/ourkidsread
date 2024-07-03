<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Child extends Model
{
    public $table = 'tbl_child';

    protected $primaryKey = 'child_id';

    public $timestamps = false;

    protected $fillable = [
        'child_name_first',
        'child_name_last',
        'child_grade',
        'child_school',
        'user_id'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function availabilities() : HasMany
    {
        return $this->hasMany(Childschedule::class, 'child_id')->where('item_type_id', 11); 
    }
}
