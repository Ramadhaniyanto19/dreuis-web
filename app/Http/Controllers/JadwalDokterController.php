<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\DoctorSchedule;

class JadwalDokterController extends Controller
{
    // public function index()
    // {
    //     $jadwalDokter = [
    //         [
    //             'no' => 1,
    //             'nama' => 'dr. Euis Magdalena, Sp.OG, MARS, FISQua',
    //             'spesialis' => 'Obgyn',
    //             'jadwal' => [
    //                 ['hari' => 'Senin-Sabtu', 'jam' => '08.00-12.00'],
    //             ],
    //         ],
    //         [
    //             'no' => 2,
    //             'nama' => 'dr. Satriyo Pamungkas, Sp.OG',
    //             'spesialis' => 'Obgyn',
    //             'jadwal' => [
    //                 ['hari' => 'Senin, Selasa, Jum\'at', 'jam' => '17.00-19.00'],
    //                 ['hari' => 'Rabu, Kamis', 'jam' => '14.00-16.00'],
    //                 ['hari' => 'Sabtu', 'jam' => '16.00-18.00'],
    //             ],
    //         ],
    //         [
    //             'no' => 3,
    //             'nama' => 'dr. Christian Harry, Sp.THT',
    //             'spesialis' => 'THT',
    //             'jadwal' => [
    //                 ['hari' => 'Senin', 'jam' => '08.00-12.00'],
    //                 ['hari' => 'Selasa-Jumat', 'jam' => '10.00-12.00'],
    //             ],
    //         ],
    //         [
    //             'no' => 4,
    //             'nama' => 'dr. Zepri Sitorus, Sp.B',
    //             'spesialis' => 'Bedah',
    //             'jadwal' => [
    //                 ['hari' => 'Senin-Jumat', 'jam' => '16.00-18.00'],
    //             ],
    //         ],
    //     ];

    //     // Kirim data ke view jadwal_dokter.blade.php
    //     return view('jadwal_dokter', compact('jadwalDokter'));
    // }

    public function index(Request $request)
    {
        $query = Doctor::with('schedules'); // Ambil data dokter beserta jadwalnya

        // Fitur pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('specialization', 'like', "%{$search}%");
        }

        $doctors = $query->paginate(10); // Paginasi data
        return view('jadwal_dokter', compact('doctors'));
    }

    public function home(Request $request)
    {
        // Validasi input
        $request->validate([
            'specialization' => 'nullable|string',
            'day' => 'nullable|string',
        ]);

        // Ambil semua spesialisasi unik dari dokter
        $specializations = Doctor::select('specialization')->distinct()->pluck('specialization');

        // Ambil semua hari kerja unik dari jadwal dokter
        $days = DoctorSchedule::select('day')->distinct()->pluck('day');

        // Ambil semua dokter dengan relasi jadwalnya
        $query = Doctor::with('schedules');

        // Filter berdasarkan spesialisasi (jika dipilih)
        if ($request->has('specialization') && $request->specialization !== 'Pilih Spesialis') {
            $query->where('specialization', $request->specialization);
        }

        // Filter berdasarkan hari kerja dokter (jika dipilih)
        if ($request->has('day') && $request->day !== 'Pilih Hari') {
            $query->whereHas('schedules', function ($q) use ($request) {
                $q->where('day', $request->day);
            });
        }

        // Paginasi hasil query
        $doctorsPaginated = $query->paginate(10);
        $doctors = $doctorsPaginated->items(); // Ambil hanya daftar dokter dalam bentuk array

        return view('home', compact('doctors', 'doctorsPaginated', 'specializations', 'days'));
    }
    public function search_doctors(Request $request)
    {
        // Validasi input
        $request->validate([
            'specialization' => 'nullable|string',
            'day' => 'nullable|string',
        ]);

        // Ambil semua spesialisasi unik dari dokter
        $specializations = Doctor::select('specialization')->distinct()->pluck('specialization');

        // Ambil semua hari kerja unik dari jadwal dokter
        $days = DoctorSchedule::select('day')->distinct()->pluck('day');

        // Ambil semua dokter dengan relasi jadwalnya
        $query = Doctor::with('schedules');

        // Filter berdasarkan spesialisasi (jika dipilih)
        if ($request->has('specialization') && $request->specialization !== 'Pilih Spesialis') {
            $query->where('specialization', $request->specialization);
        }

        // Filter berdasarkan hari kerja dokter (jika dipilih)
        if ($request->has('day') && $request->day !== 'Pilih Hari') {
            $query->whereHas('schedules', function ($q) use ($request) {
                $q->where('day', $request->day);
            });
        }

        // Paginasi hasil query
        $doctorsPaginated = $query->paginate(10);
        $doctors = $doctorsPaginated->items(); // Ambil hanya daftar dokter dalam bentuk array

        return view('jadwal_dokter', compact('doctors', 'doctorsPaginated', 'specializations', 'days'));
    }
}
