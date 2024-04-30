<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom'
    ];

    public function to_buy_lists()
    {
        return $this->hasMany(ToBuyList::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
