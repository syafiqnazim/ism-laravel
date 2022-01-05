<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kluster extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function kursuses()
    {
        return $this->hasMany(Kursus::class);
    }
}
