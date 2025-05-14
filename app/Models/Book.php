<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'genre', 'cover', 'plot', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }
}
