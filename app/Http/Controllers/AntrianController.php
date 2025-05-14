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

    return view('antrian', compact('antrians'));
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

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'jenis_kendaraan' => 'required',
        'merek_kendaraan' => 'required',
        'jenis_servis' => 'required',
        'waktu' => 'required',
        'biaya' => 'required|numeric',
    ]);

    $antrian = Antrian::findOrFail($id);
    $antrian->update($request->all());

    return redirect('/antrian')->with('success', 'Data berhasil diperbarui!');
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kendaraan' => 'required',
            'merek_kendaraan' => 'required',
            'jenis_servis' => 'required',
            'waktu' => 'required',
            'biaya' => 'required|numeric',
        ]);

        Antrian::create($request->all());

        return redirect()->back()->with('success', 'Antrian berhasil ditambahkan!');
    }
}