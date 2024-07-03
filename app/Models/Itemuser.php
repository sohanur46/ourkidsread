<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Itemuser extends Model
{
    public $table = 'tbl_item_user';

    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'item_type_id',
        'item_id',
        'user_id',
        'create_date',
        'last_updated_date',
        'last_updated_by'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function availability(): BelongsTo
    {
        return $this->belongsTo(Availablesession::class, 'item_id', 'sched_availability_id')->where('item_type_id', 11);
    }
    // public function availability(): hasOne
    // {
    //     return $this->hasOne(ScheduledAvailability::class, 'sched_availability_id', 'item_id')->where('item_type_id', 11);
    // }    
}
