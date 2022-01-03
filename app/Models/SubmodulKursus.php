<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmodulKursus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_submodul',
        'kursus_id'
    ];

    public function penceramahs()
    {
        return $this->belongsToMany(Penceramah::class)->withTimestamps();
    }
}
