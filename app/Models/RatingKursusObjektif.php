<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingKursusObjektif extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating_kursus_id',
        'objektif_kursus_id',
        'rate'
    ];

    public function ratingKursus() 
    {
        return $this->belongsTo(RatingKursus::class);
    }

    public function objektifKursus()
    {
        return $this->belongsTo(ObjektifKursus::class);
    }
}
