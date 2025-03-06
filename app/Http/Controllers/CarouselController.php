<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    // Menampilkan semua carousel
    public function index(Request $request)
    {
        $search = $request->query('search'); // Ambil parameter search dari URL

        $carousels = Carousel::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(10); // Sesuaikan dengan jumlah data per halaman

        return view('dashboard-carousel', compact('carousels', 'search'));
    }

    // Menyimpan carousel baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        // Simpan gambar ke storage
        $imagePath = $request->file('image')->store('carousels', 'public');

        // Simpan data ke database
        Carousel::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard-carousel.index')->with('success', 'Carousel berhasil ditambahkan!');
    }

    // Mengupdate carousel
    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($carousel->image);
            $imagePath = $request->file('image')->store('carousels', 'public');
            $carousel->image = $imagePath;
        }

        // Update data
        $carousel->name = $request->name;
        $carousel->save();

        return redirect()->route('dashboard-carousel.index')->with('success', 'Carousel berhasil diperbarui!');
    }

    // Menghapus carousel
    public function destroy($id)
    {

        $carousel = Carousel::findOrFail($id);
        if ($carousel->image) {
            Storage::disk('public')->delete($carousel->image);
        }
        $carousel->delete();


        return redirect()->route('dashboard-carousel.index')->with('success', 'Carousel berhasil dihapus!');
    }

    // public function destroy($id)
    // {
    //     $doctor = Doctor::findOrFail($id);
    //     if ($doctor->image) {
    //         Storage::disk('public')->delete($doctor->image);
    //     }
    //     $doctor->delete();

    //     return redirect()->route('dashboard-dokter.index')->with('success', 'Dokter berhasil dihapus!');
    // }
}
