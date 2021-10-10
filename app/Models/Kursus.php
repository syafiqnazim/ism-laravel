<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_kursus",
        "kapasiti",
        "kluster",
        "peruntukan",
        "bilik",
        "tarikh_mula",
        "tarikh_akhir",
        "bil_keperluan_asrama",
        "warna",
    ];
}
