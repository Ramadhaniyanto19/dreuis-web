<?php

namespace App\Http\Controllers;

use App\Models\InformationRs;
use Illuminate\Http\Request;

class InformationRsController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $informationRs = InformationRs::all();
        return view('dashboard-information-rs', compact('informationRs'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('dashboard-information-rs.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'no_wa' => 'required|string|max:15',
            'location' => 'required|string|max:255',
        ]);

        InformationRs::create($request->all());
        return redirect()->route('dashboard-information-rs.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan detail data
    public function show(InformationRs $informationRs)
    {
        return view('dashboard-information-rs.show', compact('informationRs'));
    }

    // Menampilkan form edit data
    public function edit(InformationRs $informationRs)
    {
        return view('dashboard-information-rs.edit', compact('informationRs'));
    }

    // Mengupdate data
    public function update(Request $request, InformationRs $informationRs)
    {

        $request->validate([
            'no_wa' => 'required|string|max:15',
            'location' => 'required|string|max:255',
        ]);

        $informationRs->update($request->all());
        return redirect()->route('dashboard-information-rs.index')->with('success', 'Data berhasil diupdate!');
    }

    // Menghapus data
    public function destroy(InformationRs $informationRs)
    {
        $informationRs->delete();
        return redirect()->route('dashboard-information-rs.index')->with('success', 'Data berhasil dihapus!');
    }
}
