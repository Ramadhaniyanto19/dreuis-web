<?php

use App\Http\Controllers\JadwalDokter;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('home', ['jadwalDokter' => [
        [
            'no' => 1,
            'nama' => 'Dr. Euis Magdalena, Sp.OG, MARS, FISQua',
            'spesialis' => 'Obgyn',
            'jadwal' => [
                ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
            ],
        ],
        [
            'no' => 2,
            'nama' => 'Dr. Satriyo Pamungkas, Sp.OG',
            'spesialis' => 'Obgyn',
            'jadwal' => [
                ['hari' => 'Senin, Selasa, Jumat', 'jam' => '17.00-19.00'],
                ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
                ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
            ],
        ],
        [
            'no' => 3,
            'nama' => 'Dr. Christian Harry, Sp.THT',
            'spesialis' => 'THT',
            'jadwal' => [
                ['hari' => 'Senin', 'jam' => '08.00-12.00'],
                ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
            ],
        ],
        [
            'no' => 4,
            'nama' => 'Dr. Zepri Sitorus, Sp.B',
            'spesialis' => 'Bedah',
            'jadwal' => [
                ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
            ],
        ],
    ]]);
});

Route::get('/jadwal-dokter', function () {
    return view('jadwal_dokter', ['jadwalDokter' => [
        [
            'no' => 1,
            'nama' => 'Dr. Euis Magdalena, Sp.OG, MARS, FISQua',
            'spesialis' => 'Obgyn',
            'jadwal' => [
                ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
            ],
        ],
        [
            'no' => 2,
            'nama' => 'Dr. Satriyo Pamungkas, Sp.OG',
            'spesialis' => 'Obgyn',
            'jadwal' => [
                ['hari' => 'Senin, Selasa, Jumat', 'jam' => '17.00-19.00'],
                ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
                ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
            ],
        ],
        [
            'no' => 3,
            'nama' => 'Dr. Christian Harry, Sp.THT',
            'spesialis' => 'THT',
            'jadwal' => [
                ['hari' => 'Senin', 'jam' => '08.00-12.00'],
                ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
            ],
        ],
        [
            'no' => 4,
            'nama' => 'Dr. Zepri Sitorus, Sp.B',
            'spesialis' => 'Bedah',
            'jadwal' => [
                ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
            ],
        ],
    ]]);
});
Route::get('/detail-dokter', function () {
    return view('detail_dokter');
});
Route::get('/buat-janji', function () {
    // Menangkap nilai dari query string
    $dokter = request('dokter');
    $spesialis = request('spesialis');
    // $selected_day = request('hari');  // Tangkap nilai 'hari' dari query string

    // Kirim nilai tersebut ke view
    return view('buat_janji', compact('dokter', 'spesialis'));
});


Route::get('/promo', function () {
    return view('promo');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/detail-berita', function () {
    return view('detail_berita');
});

Route::get('/dashboard/login', function () {
    return view('/login');
});
