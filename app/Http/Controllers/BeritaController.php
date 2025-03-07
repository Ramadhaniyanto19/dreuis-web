<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('dashboard-berita', compact('beritas'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('dashboard-berita-create'); // Langsung ke file create.blade.php di folder views
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi' => 'required|string', // Pastikan ini ada
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data ke database
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->penulis = $request->penulis;
        $berita->isi = $request->isi; // Pastikan ini diisi

        // Upload gambar (jika ada)
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita_images', 'public');
            $berita->gambar = $gambarPath;
        }

        $berita->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard-berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Menampilkan detail berita
    public function show(Berita $berita)
    {
        return view('dashboard-berita.show', compact('berita'));
    }

    // Menampilkan form edit berita
    // public function edit(Berita $berita)
    // {
    //     dd($berita->all());
    //     return view('dashboard-berita-edit', compact('berita')); // Langsung ke file edit.blade.php di folder views
    // }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id); // Pastikan berita ditemukan
        return view('dashboard-berita-edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id); // Pastikan berita ditemukan

        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita->judul = $request->judul;
        $berita->penulis = $request->penulis;
        $berita->isi = $request->isi;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita_images', 'public');
            $berita->gambar = $gambarPath;
        }

        $berita->save();

        return redirect()->route('dashboard-berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // Menghapus berita
    // public function destroy(Berita $berita)
    // {
    //     $berita->delete();
    //     return redirect()->route('dashboard-berita.index')->with('success', 'Berita berhasil dihapus!');
    // }
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        try {
            // Hapus gambar jika ada
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->delete();

            return redirect()->route('dashboard-berita.index')->with('success', 'berita berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function detailBerita($id)
    {
        // Ambil data berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Kirim data berita ke view
        return view('detail_berita', compact('berita'));
    }
}
