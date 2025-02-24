<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nip', 'specialization', 'phone', 'image'];

    // Relasi ke tabel doctor_schedules
    public function schedules()
    {
        return $this->hasMany(DoctorSchedule::class);
    }
}
