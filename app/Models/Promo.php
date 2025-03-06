<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promo extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai konvensi Laravel (plural dari model), tentukan secara eksplisit
    protected $table = 'promos';

    // Field yang boleh diisi secara massal
    protected $fillable = [
        'promoName',
        'desc_promo',
        'gambar',
        'start_promo',
        'end_promo',
    ];

    // Mengonversi tipe data pada kolom tertentu
    protected $casts = [
        'start_promo' => 'datetime:Y-m-d H:i:s', // Menentukan format default datetime
        'end_promo'   => 'datetime:Y-m-d H:i:s',
    ];

    // Format datetime default untuk penyimpanan
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Relasi ke model User jika promo memiliki pemilik.
     * Misalnya, setiap promo dibuat oleh user tertentu.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope untuk mendapatkan promo yang sedang aktif berdasarkan tanggal
     */
    public function scopeActive($query)
    {
        return $query->where('start_promo', '<=', now())
            ->where('end_promo', '>=', now());
    }

    /**
     * Scope untuk mendapatkan promo yang telah berakhir
     */
    public function scopeExpired($query)
    {
        return $query->where('end_promo', '<', now());
    }
}
