<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingKursusSubmodul extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating_kursus_id',
        'submodul_kursus_id',
        'rate'
    ];

    public function ratingKursus() 
    {
        return $this->BelongsTo(RatingKursus::class);
    }

    public function submodulKursus()
    {
        return $this->belongsTo(SubmodulKursus::class);
    }

}
