<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penceramah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ic_number',
        'phone_number',
        'email',
        'sector',
        'title',
        'gender',
        'bank_number',
        'bank_name',
        'bank_address',
        'working_address',
        'home_address',
        'working_number',
        'home_number',
        'fax_number',
        'service_classified',
        'position',
        'grade',
        'highest_academic',
        'specialisation',
        'experience',
        'professional_member',
        'distribution',
        'academic_qualification',
        'business_qualification',
    ];

    public function subModulKursus()
    {
        return $this->hasMany(SubmodulKursus::class);
    }
}
