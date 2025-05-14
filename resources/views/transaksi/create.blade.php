@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Transaksi</h1>

    <form action="{{ route('transaksis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan nama pelanggan" required>
</div>



        {{-- Ubah input kendaraan ke manual --}}
        <div class="mb-3">
            <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="form-control" placeholder="Contoh: Honda Beat 2020" required>
        </div>

        <div class="mb-3">
            <label for="no_plat" class="form-label">Nomor Plat</label>
            <input type="text" name="no_plat" id="no_plat" class="form-control" placeholder="Contoh: AB 1234 CD" required>
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea name="keluhan" id="keluhan" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
