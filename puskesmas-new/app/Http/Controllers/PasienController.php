<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahans = Kelurahan::all();
        return view('admin.pasien.create', compact('kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|in:L,P',
            'email' => 'required|string|email',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|integer|exists:kelurahans,id'
        ]);

        Pasien::create($validated);
        return redirect('dashboard/pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::with('kelurahan')->find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        $kelurahans = Kelurahan::all(); // Fetch the list of kelurahans
        return view('admin.pasien.edit', compact('pasien', 'kelurahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|in:L,P',
            'email' => 'required|string|email',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|integer|exists:kelurahans,id'
        ]);
         // Setelah divalidasi kemudian mengambil data
         $pasien = Pasien::find($id);
         $pasien->update($validated);
         return redirect('dashboard/pasien')-> with('Update', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('dashboard/pasien')-> with('Delete', 'Data Berhasil dihapus');
    }
}
