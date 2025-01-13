<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'book_id',
        'category',
        'book_name',
        'price',
        'stock',
        'publisher',
    ];


    public function publisher(): BelongsTo {
        return $this->belongsTo(publisher::class);
    } 
}
