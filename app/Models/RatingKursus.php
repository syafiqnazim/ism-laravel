<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingKursus extends Model
{
    use HasFactory;

    protected $fillable = [
        'kursus_id',
        'rate_1',
        'rate_2',
        'rate_3',
        'suggestion',
        'rate_food_1',
        'rate_food_2',
        'rate_food_3',
        'rate_food_4',
        'rate_food_5',
        'rate_food_6',
        'rate_food_7',
        'food_suggestion',
    ];

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }

    public function ratingObjektif()
    {
        return $this->hasMany(RatingKursusObjektif::class);
    }

    public function ratingSubmodul()
    {
        return $this->hasMany(RatingKursusSubmodul::class);
    }
}
