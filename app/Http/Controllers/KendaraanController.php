<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    // Menampilkan daftar kendaraan
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Menampilkan form tambah kendaraan
    public function create()
    {
        return view('kendaraan.create');
    }

    // Menyimpan kendaraan
    public function store(Request $request)
    {
        $request->validate([
            'no_polisi' => 'required|unique:kendaraans',
            'jenis' => 'required',
            'merk' => 'required',
            'warna' => 'required',
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    // Menampilkan form edit kendaraan
    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    // Update kendaraan
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_polisi' => 'required|unique:kendaraans,no_polisi,' . $id,
            'jenis' => 'required',
            'merk' => 'required',
            'warna' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui!');
    }

    // Hapus kendaraan
    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus!');
    }
}
