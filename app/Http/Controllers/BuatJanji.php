<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatJanji extends Controller
{
    public function showForm(Request $request)
    {
        // Mengambil data dokter dan spesialis dari query string
        $dokter = $request->query('dokter');
        $spesialis = $request->query('spesialis');
        $hari = $request->query('hari');

        // Mengirimkan data ke view
        return view('buat-janji', compact('dokter', 'spesialis', 'hari'));
    }
}
