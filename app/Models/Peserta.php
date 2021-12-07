<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_kursus",
        "sector",
        "title",
        "name",
        "ic_number",
        "tarikh_lahir",
        "gender",
        "status_perkahwinan",
        "kumpulan_isi_rumah",
        "kategori_oku",
        "position",
        "agensi",
        "email",
        "tarikh_lantikan",
        "gred_jawatan",
        "working_address",
        "home_address",
        "working_number",
        "home_number",
        "fax_number",
        "phone_number",
        "highest_academic",
        "penyakit",
        "alahan",
        "relative_name",
        "pertalian",
        "relative_address",
        "relative_home_number",
        "relative_phone_number",
    ];
}
