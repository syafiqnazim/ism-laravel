<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempahanAsrama extends Model
{
    use HasFactory;

    protected $fillable = [
        "tarikh_masuk",
        "tarikh_keluar",
        "asrama_id",
        "kursus_id", 
    ];


    public function asrama()
    {
        return $this->belongsTo(Asrama::class, 'asrama_id');
    }

     

     
}
