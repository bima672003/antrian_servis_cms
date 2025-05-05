<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    // Menampilkan form untuk menambah pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|max:255',
        'no_hp' => 'required',
        'alamat' => 'nullable',
    ]);

    Pelanggan::create($validated);

    return redirect('/pelanggan')->with('message', 'Pelanggan berhasil ditambahkan');
}
    // Menampilkan detail pelanggan
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    // Menampilkan form untuk mengedit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Memperbarui data pelanggan
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|max:255',
            'no_hp' => 'required',
            'alamat' => 'nullable',
        ]);

        $pelanggan->update($validated);

        return redirect('/pelanggan')->with('message', 'Pelanggan berhasil diperbarui');
    }

    // Menghapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect('/pelanggan')->with('message', 'Pelanggan berhasil dihapus');
    }
}
