@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pelanggan</h2>

    <form action="{{ route('pelanggans.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('pelanggans.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
