<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = Doctor::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('nip', 'like', "%{$search}%")
                ->orWhere('specialization', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%");
        }

        $doctors = $query->paginate(10); // Bisa diganti dengan jumlah yang diinginkan
        return view('dashboard-dokter', compact('doctors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:50|unique:doctors,nip',
            'specialization' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'schedules' => 'required|array', // Jadwal dokter
            'schedules.*.day' => 'required|string|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu', // Hari
            'schedules.*.start_time' => 'required|date_format:H:i', // Jam mulai
            'schedules.*.end_time' => 'required|date_format:H:i|after:schedules.*.start_time', // Jam selesai
        ]);

        try {
            $imagePath = null;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagePath = $request->file('image')->store('doctors', 'public');
            }

            // Simpan data dokter
            $doctor = Doctor::create([
                'name' => $request->name,
                'nip' => $request->nip,
                'specialization' => $request->specialization,
                'phone' => $request->phone,
                'image' => $imagePath,
            ]);

            // Simpan jadwal dokter
            foreach ($request->schedules as $schedule) {
                $doctor->schedules()->create([
                    'day' => $schedule['day'],
                    'start_time' => $schedule['start_time'],
                    'end_time' => $schedule['end_time'],
                ]);
            }

            return redirect()->route('dashboard-dokter.index')->with('success', 'Dokter dan jadwal berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:50|unique:doctors,nip,' . $doctor->id,
            'specialization' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'schedules' => 'required|array',
            'schedules.*.day' => 'required|string|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'schedules.*.start_time' => 'required|date_format:H:i',
            'schedules.*.end_time' => 'required|date_format:H:i|after:schedules.*.start_time',
        ]);

        if ($request->hasFile('image')) {
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
            $doctor->image = $request->file('image')->store('doctors', 'public');
        }

        $doctor->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'specialization' => $request->specialization,
            'phone' => $request->phone,
        ]);

        // Hapus jadwal lama dan simpan yang baru
        $doctor->schedules()->delete();
        foreach ($request->schedules as $schedule) {
            $doctor->schedules()->create([
                'day' => $schedule['day'],
                'start_time' => $schedule['start_time'],
                'end_time' => $schedule['end_time'],
            ]);
        }

        return redirect()->route('dashboard-dokter.index')->with('success', 'Dokter dan jadwal berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        if ($doctor->image) {
            Storage::disk('public')->delete($doctor->image);
        }
        $doctor->delete();

        return redirect()->route('dashboard-dokter.index')->with('success', 'Dokter berhasil dihapus!');
    }
}
