<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalDokter extends Controller
{
    public function index()
    {
        $jadwalDokter = [
            [
                'no' => 1,
                'nama' => 'dr. Euis Magdalena, Sp.OG, MARS, FISQua',
                'spesialis' => 'Obgyn',
                'jadwal' => [
                    ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
                ],
            ],
            [
                'no' => 2,
                'nama' => 'dr. Satriyo Pamungkas, Sp.OG',
                'spesialis' => 'Obgyn',
                'jadwal' => [
                    ['hari' => 'Senin, Selasa, Jum\'at', 'jam' => '17.00-19.00'],
                    ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
                    ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
                ],
            ],
            [
                'no' => 3,
                'nama' => 'dr. Christian Harry, Sp.THT',
                'spesialis' => 'THT',
                'jadwal' => [
                    ['hari' => 'Senin', 'jam' => '08.00-12.00'],
                    ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
                ],
            ],
            [
                'no' => 4,
                'nama' => 'dr. Zepri Sitorus, Sp.B',
                'spesialis' => 'Bedah',
                'jadwal' => [
                    ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
                ],
            ],
        ];

        // Kirim data ke view jadwal_dokter.blade.php
        return view('jadwal_dokter', compact('jadwalDokter'));
    }
}
