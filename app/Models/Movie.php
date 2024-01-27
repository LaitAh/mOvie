<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the director associated with the movie
     */
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    /**
     * Get the actors associated with the movie
     */
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
