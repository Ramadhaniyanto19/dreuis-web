<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Promo::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('promoName', 'like', "%{$search}%");
        }

        $promos = $query->paginate(10); // Bisa diganti dengan jumlah yang diinginkan
        return view('dashboard-promo', compact('promos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'promoName' => 'required|string|max:255',
            'desc_promo' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_promo' => 'nullable|date',
            'end_promo' => 'nullable|date|after_or_equal:start_promo',
        ]);

        try {
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $path = $file->store('promos', 'public'); // Simpan di storage/app/public/promos
                $validated['gambar'] = $path;
            }

            Promo::create($validated);

            return redirect()->route('dashboard-promo.index')->with('success', 'Promo berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $validated = $request->validate([
            'promoName' => 'sometimes|required|string|max:255',
            'desc_promo' => 'sometimes|nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'start_promo' => 'sometimes|nullable|date',
            'end_promo' => 'sometimes|nullable|date|after_or_equal:start_promo',
        ]);

        try {
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($promo->gambar) {
                    Storage::disk('public')->delete($promo->gambar);
                }

                // Simpan gambar baru
                $file = $request->file('gambar');
                $path = $file->store('promos', 'public');
                $validated['gambar'] = $path;
            }

            $promo->update($validated);

            return redirect()->route('dashboard-promo.index')->with('success', 'Promo berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);

        try {
            // Hapus gambar jika ada
            if ($promo->gambar) {
                Storage::disk('public')->delete($promo->gambar);
            }

            $promo->delete();

            return redirect()->route('dashboard-promo.index')->with('success', 'Promo berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function indexPromo(Request $request)
    {
        $query = Promo::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('promoName', 'like', "%{$search}%");
        }

        $promos = $query->paginate(10); // Sesuaikan jumlah yang diinginkan
        return view('promo', compact('promos'));
    }
}
