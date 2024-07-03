<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'tbl_book';

    protected $primaryKey = 'book_id';

    public $timestamps = false;

    protected $fillable = [
        'book_title',
        'book_isbn_13',
        'book_isbn_10',
        'book_desc_short',
        'book_num_pages'
    ];
}
