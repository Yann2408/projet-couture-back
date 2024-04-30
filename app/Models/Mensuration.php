<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensuration extends Model
{
    use HasFactory;

    // public function pictures()
    // {
    //     return $this->morphMany(Picture::class, 'support');
    // }

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
