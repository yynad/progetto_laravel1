<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
  protected $fillable = ['name', 'description', 'logo', 'user_id'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
