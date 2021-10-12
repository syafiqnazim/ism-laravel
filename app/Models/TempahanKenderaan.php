<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempahanKenderaan extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_penempah",
        "ic_penempah",
        "tujuan",
        "destinasi",
        "pemandu",
        "jenis_kenderaan",
        "tarikh_mula",
        "tarikh_akhir",
    ];
}
