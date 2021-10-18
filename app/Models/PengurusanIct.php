<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusanIct extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_kursus",
        "peralatan",
        "jumlah",
        "nama_penempah",
        "tarikh_mula",
        "tarikh_akhir",
    ];
}
