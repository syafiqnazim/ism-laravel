<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Kursus extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_kursus",
        "kapasiti",
        "kluster",
        "peruntukan",
        "bilik",
        "tarikh_mula",
        "tarikh_akhir",
        "bil_keperluan_asrama",
    ];

    protected $appends = [
        'totalParticipants',
        'totalPenceramah'
    ];

    // protected $dateFormat = 'd/m/Y';

    public function getStartDateAttribute($date)
    {
        return Carbon::parse($this->attributes['tarikh_mula'])->format('d/m/Y');
    }

    public function getEndDateAttribute($date)
    {
        return Carbon::parse($this->attributes['tarikh_akhir'])->format('d/m/Y');
    }

    public function getTotalParticipantsAttribute() {
        return $this->participants()->count();
    }

    public function getTotalPenceramahAttribute() {
        return $this->penceramahs()->count();
    }

    public function kursusKluster()
    {
        return $this->belongsTo(Kluster::class, 'kluster');
    }

    public function subModulKursus()
    {
        return $this->hasMany(SubmodulKursus::class);
    }

    public function penceramahs()
    {
        $submoduls = $this->subModulKursus;
        $penceramahs = collect();
        foreach ($submoduls as $submodul) {
            if (!$penceramahs->contains('id', $submodul->penceramah->id)) {
                $penceramahs->push($submodul->penceramah);
            }
        }

        return $penceramahs;
    }

    public function objektifs()
    {
        return $this->hasMany(ObjektifKursus::class);
    }

    public function participants() {
        return $this->hasMany(Peserta::class, 'nama_kursus', 'nama_kursus');
    }

    public function bayaranYuran() {
        return $this->hasMany(KutipanYuran::class);
    }
}
