<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Http\Controllers\Controller; // ✅ tambahkan ini!

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', compact('data'));
    }
    
    public function create()
    {
    return view('pegawai.create');
    }

    public function store(Request $request)
{
    // Simulasi penyimpanan, bisa pakai session/tempat lain nanti
    return redirect('/pegawai')->with('message', 'Data pegawai berhasil disimpan (simulasi).');
}


    public function show($id)
    {
        $data = Pegawai::find($id);
        return view('pegawai.show', compact('data'));
    }

    public function edit($id)
    {
        $data = [
            'id' => $id,
            'nama' => 'Contoh Nama',
            'jabatan' => 'Contoh Jabatan',
            'id_transaksi' => '9999'
        ];
        return view('pegawai.edit', compact('data'));
    }
    
    

    public function update(Request $request, $id)
{
    // Simulasi update data
    return redirect('/pegawai')->with('message', 'Data pegawai berhasil diupdate (simulasi).');
}


    public function destroy($id)
    {
        return redirect('/pegawai')->with('message', 'Data pegawai berhasil dihapus (simulasi).');
    }
}
