<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'description',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
