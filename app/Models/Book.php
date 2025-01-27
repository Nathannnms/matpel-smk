<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $table = 'books';
    
    protected $fillable = [
        'book_id',
        'category',
        'book_name',
        'price',
        'stock',
        'publisher',
    ];

    protected $primaryKey = 'book_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function publisher(): BelongsTo {
        return $this->belongsTo(publisher::class);
    } 
}
