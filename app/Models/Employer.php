<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $table = 'tbl_employer';

    protected $primaryKey = 'employer_id';

    public $timestamps = false;

    protected $fillable = [
        'employer_name',
        'employer_description'
    ];
}
