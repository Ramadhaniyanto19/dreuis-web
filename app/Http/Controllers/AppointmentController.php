<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    // Menampilkan semua riwayat janji
    public function index()
    {
        $appointments = Appointment::latest()->get(); // Ambil data terbaru
        return view('dashboard-riwayat-janji', compact('appointments'));
    }

    // Menyimpan data janji ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15|regex:/^[0-9]+$/',
            'alamat' => 'required|string|max:255',
            'dokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
        ]);

        Log::info('Data yang divalidasi:', $validated); // Log data yang divalidasi

        try {
            // Simpan data ke database
            $appointment = Appointment::create($validated);
            Log::info('Data berhasil disimpan:', $appointment->toArray()); // Log data yang disimpan

            // Jika berhasil, buat URL WhatsApp
            $whatsappMessage = "Halo, saya ingin membuat janji dengan dokter {$validated['dokter']} pada hari {$validated['hari']}. Nama saya: {$validated['nama']}";
            $whatsappNumber = "6285881298808"; // Ganti dengan nomor WhatsApp tujuan
            $whatsappUrl = "https://wa.me/$whatsappNumber?text=" . urlencode($whatsappMessage);

            Log::info('Redirecting to WhatsApp URL:', ['url' => $whatsappUrl]); // Log URL WhatsApp

            // Redirect ke WhatsApp
            return redirect()->away($whatsappUrl);
        } catch (\Exception $e) {
            // Log error
            Log::error('Gagal menyimpan janji: ' . $e->getMessage(), [
                'exception' => $e,
                'request_data' => $request->all(),
            ]);

            // Jika gagal, kembalikan ke halaman sebelumnya dengan pesan error
            return back()->with('error', 'Gagal menyimpan janji: ' . $e->getMessage());
        }
    }
}
