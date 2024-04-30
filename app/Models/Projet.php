<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    // public function pictures()
    // {
    //     return $this->morphMany(Picture::class, 'support');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patron()
    {
        return $this->belongsTo(Patron::class);
    }

    public function tissus()
    {
        return $this->belongsToMany(Tissu::class);
    }

    public function mensuration()
    {
        return $this->belongsTo(Mensuration::class);
    }
}
