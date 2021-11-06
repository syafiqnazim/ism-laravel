<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjektifKursus extends Model
{
    use HasFactory;

    protected $fillable = [
        'objektif_kursus',
        'kursus_id'
    ];
}
