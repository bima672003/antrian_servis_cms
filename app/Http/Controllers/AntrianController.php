<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;

class AntrianController extends Controller
{
    public function index(Request $request)
{
    $query = Antrian::query();

    if ($request->has('search')) {
        $search = $request->search;
        $query->where('nama', 'like', "%$search%")
              ->orWhere('jenis_servis', 'like', "%$search%")
              ->orWhere('jenis_kendaraan', 'like', "%$search%")
              ->orWhere('merek_kendaraan', 'like', "%$search%");
    }

    $antrians = $query->get();

    return view('antrian.index', compact('antrians'));
}


public function destroy($id)
{
    $antrian = Antrian::findOrFail($id);
    $antrian->delete();
    return redirect('/antrian')->with('success', 'Data berhasil dihapus!');
}

public function edit($id)
{
    $antrian = Antrian::findOrFail($id);
    $antrians = Antrian::all();
    return view('antrian', compact('antrian', 'antrians'));
}

public function store(Request $request)
{
    $request->validate([
        'nomor_antrian' => 'required',
        'tanggal' => 'required|date',
        'status' => 'nullable|string',
    ]);

    Antrian::create($request->all());

    return redirect()->route('antrian.index')->with('success', 'Antrian berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    $request->validate([
        'nomor_antrian' => 'required',
        'tanggal' => 'required|date',
        'status' => 'nullable|string',
    ]);

    $antrian = Antrian::findOrFail($id);
    $antrian->update($request->all());

    return redirect()->route('antrian.index')->with('success', 'Antrian berhasil diupdate.');
}
}