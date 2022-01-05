<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingPenceramahModul extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating_penceramah_id',
        'submodul_kursus_id',
        'rate'
    ];
}
