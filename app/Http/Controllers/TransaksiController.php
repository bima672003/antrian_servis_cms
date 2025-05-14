<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        $transaksis = Transaksi::with('pelanggan', 'kendaraan')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    // Menampilkan form tambah transaksi
    public function create()
    {
        $kendaraans = Kendaraan::all();
        $pelanggans = Pelanggan::all();
        return view('transaksi.create', compact('kendaraans', 'pelanggans'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_pelanggan' => 'required|string|max:255',
        'nama_kendaraan' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'total_biaya' => 'required|numeric',
    ]);

    // Simpan data
    Transaksi::create([
        'nama_pelanggan' => $request->nama_pelanggan,
        'nama_kendaraan' => $request->nama_kendaraan,
        'tanggal' => $request->tanggal,
        'total_biaya' => $request->total_biaya,
    ]);

    // Redirect ke halaman utama dengan notifikasi
    return redirect('/')
           ->with('success', 'Data transaksi berhasil disimpan.');
}


    
    // Menampilkan detail transaksi
    public function show($id)
    {
        $transaksi = Transaksi::with('pelanggan', 'kendaraan')->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    
    // Setelah store()
return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil ditambahkan.');

// Setelah update()
return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil diperbarui.');

// Setelah delete()
return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil dihapus.');
}
}
