<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingPenceramah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kursus_id',
        'penceramah_id',
        'rate_1',
        'rate_2',
        'rate_3',
        'rate_by'
    ];

    public function penceramah()
    {
        return $this->belongsTo(Penceramah::class);
    }

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }

    public function modulRatings()
    {
        return $this->hasMany(RatingPenceramahModul::class);
    }

}
