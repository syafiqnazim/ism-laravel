<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KutipanYuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_resit',
        'tarikh_bayaran',
        'kursus_id',
        'peserta_id',
        'kursus_id'
    ];

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }
}
