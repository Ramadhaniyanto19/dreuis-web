<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carousel extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai konvensi Laravel (plural dari model), tentukan secara eksplisit
    protected $table = 'carousels';

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'name',
        'image',
    ];
}
