<?php

use App\Http\Controllers\JadwalDokter;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\JadwalDokterController;

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

// Route::get('/jadwal-dokter', function () {
//     return view('jadwal_dokter', ['jadwalDokter' => [
//         [
//             'no' => 1,
//             'nama' => 'Dr. Euis Magdalena, Sp.OG, MARS, FISQua',
//             'spesialis' => 'Obgyn',
//             'jadwal' => [
//                 ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
//             ],
//         ],
//         [
//             'no' => 2,
//             'nama' => 'Dr. Satriyo Pamungkas, Sp.OG',
//             'spesialis' => 'Obgyn',
//             'jadwal' => [
//                 ['hari' => 'Senin, Selasa, Jumat', 'jam' => '17.00-19.00'],
//                 ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
//                 ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
//             ],
//         ],
//         [
//             'no' => 3,
//             'nama' => 'Dr. Christian Harry, Sp.THT',
//             'spesialis' => 'THT',
//             'jadwal' => [
//                 ['hari' => 'Senin', 'jam' => '08.00-12.00'],
//                 ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
//             ],
//         ],
//         [
//             'no' => 4,
//             'nama' => 'Dr. Zepri Sitorus, Sp.B',
//             'spesialis' => 'Bedah',
//             'jadwal' => [
//                 ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
//             ],
//         ],
//     ]]);
// });
// Route::get('/jadwal-dokter', function () {
//     return view('jadwal_dokter', ['jadwalDokter' => [
//         [
//             'no' => 1,
//             'nama' => 'Dr. Euis Magdalena, Sp.OG, MARS, FISQua',
//             'spesialis' => 'Obgyn',
//             'jadwal' => [
//                 ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
//             ],
//         ],
//         [
//             'no' => 2,
//             'nama' => 'Dr. Satriyo Pamungkas, Sp.OG',
//             'spesialis' => 'Obgyn',
//             'jadwal' => [
//                 ['hari' => 'Senin, Selasa, Jumat', 'jam' => '17.00-19.00'],
//                 ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
//                 ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
//             ],
//         ],
//         [
//             'no' => 3,
//             'nama' => 'Dr. Christian Harry, Sp.THT',
//             'spesialis' => 'THT',
//             'jadwal' => [
//                 ['hari' => 'Senin', 'jam' => '08.00-12.00'],
//                 ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
//             ],
//         ],
//         [
//             'no' => 4,
//             'nama' => 'Dr. Zepri Sitorus, Sp.B',
//             'spesialis' => 'Bedah',
//             'jadwal' => [
//                 ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
//             ],
//         ],
//     ]]);
// });
// Route::resource('/jadwal-dokter', [JadwalDokter::class]);

Route::resource('/jadwal-dokter', JadwalDokterController::class);

// Route tambahan untuk pencarian (jika diperlukan)
Route::get('/jadwal-dokter/search', [JadwalDokterController::class, 'search'])->name('jadwal-dokter.search');


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/dashboard/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/dashboard/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route untuk dashboard dokter
Route::resource('/dashboard-dokter', DoctorController::class)->middleware('auth');
// 
// Route::get('/dashboard-dokter', [DoctorController::class, 'index'])->name('dashboard-dokter.index');
