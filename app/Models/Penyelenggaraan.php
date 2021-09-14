<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelenggaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        "jenis_kerosakan",
        "keterangan_kerosakan",
        "penyelenggara",
        "tarikh_aduan",
        "tarikh_selesai",
        "status",
    ];
}
