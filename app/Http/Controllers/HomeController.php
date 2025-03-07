<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Carousel; // Pastikan model Carousel sudah dibuat
use App\Models\Promo; // Pastikan model Carousel sudah dibuat

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data carousel
        $carousels = Carousel::all(); // Sesuaikan dengan query yang Anda butuhkan

        // promo
        $promos = Promo::latest()->take(4)->get();
        $beritas = Berita::latest()->take(4)->get();

        // Ambil data dokter dengan relasi jadwalnya
        $query = Doctor::with('schedules');

        // Fitur pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('specialization', 'like', "%{$search}%");
        }

        $doctors = $query->paginate(10); // Paginasi data

        // Ambil semua spesialisasi unik dari dokter
        $specializations = Doctor::select('specialization')->distinct()->pluck('specialization');

        // Ambil semua hari kerja unik dari jadwal dokter
        $days = DoctorSchedule::select('day')->distinct()->pluck('day');

        // Kirim data ke view
        return view('home', compact('carousels', 'doctors', 'specializations', 'days', 'promos', 'beritas'));
    }
}
