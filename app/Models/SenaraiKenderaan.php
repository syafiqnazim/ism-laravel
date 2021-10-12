<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenaraiKenderaan extends Model
{
    use HasFactory;

    protected $fillable = [
        "no_pendaftaran",
        "jenama",
        "jenis_kenderaan",
    ];
}
