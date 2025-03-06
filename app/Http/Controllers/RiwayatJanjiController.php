<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Untuk ekspor PDF

class RiwayatJanjiController extends Controller
{
    // Menampilkan semua riwayat janji
    public function index(Request $request)
    {
        $search = $request->query('search'); // Ambil parameter search dari URL

        $appointments = Appointment::query()
            ->when($search, function ($query, $search) {
                return $query->where('dokter', 'like', '%' . $search . '%')
                    ->orWhere('nomor_hp', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(10); // Sesuaikan dengan jumlah data per halaman

        return view('dashboard-riwayat-janji', compact('appointments', 'search'));
    }

    public function exportPdf(Request $request)
    {
        $search = $request->query('search'); // Ambil parameter search dari URL

        $appointments = Appointment::query()
            ->when($search, function ($query, $search) {
                return $query->where('dokter', 'like', '%' . $search . '%')
                    ->orWhere('nomor_hp', 'like', '%' . $search . '%');
            })
            ->latest()
            ->get(); // Ambil semua data yang difilter

        $pdf = Pdf::loadView('pdf.riwayat-janji', compact('appointments'));
        return $pdf->download('riwayat-janji.pdf');
    }
}
