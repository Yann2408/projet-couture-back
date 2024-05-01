<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom'
    ];

    // public function pictures()
    // {
    //     return $this->morphMany(Picture::class, 'support');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
