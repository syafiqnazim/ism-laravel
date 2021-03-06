<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    use HasFactory;

    protected $fillable = [
        "kod_asrama",
        "kapasiti",
        "status",
        'tarikh_mula',
        'tarikh_tamat',
    ];
}
