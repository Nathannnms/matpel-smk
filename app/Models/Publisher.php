<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'publisher_id',
        'name',
        'address',
        'city',
        'phone_number',
    ];

    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    } 
}
