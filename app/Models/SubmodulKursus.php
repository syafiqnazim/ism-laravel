<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmodulKursus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_submodul',
        'masa_mula',
        'masa_akhir',
        'penceramah_id',
        'kursus_id'
    ];

    public function penceramah() {
        return $this->belongsTo('App\Models\Penceramah', 'penceramah_id', 'id');
    }
}
