<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempahanPesertaAsrama extends Model
{
    use HasFactory;

    protected $fillable = [
        "tempahan_asrama_id",
        "peserta_id", 
    ];

    
}
