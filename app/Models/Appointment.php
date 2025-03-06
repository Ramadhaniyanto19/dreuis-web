<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'nama',
        'nomor_hp',
        'alamat',
        'dokter',
        'spesialis',
        'hari',
    ];
}
