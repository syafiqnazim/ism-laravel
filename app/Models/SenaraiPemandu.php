<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenaraiPemandu extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_pemandu",
        "ic_pemandu",
    ];
}
