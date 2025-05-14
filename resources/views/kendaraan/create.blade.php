@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Kendaraan</h2>

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="no_polisi">No Polisi</label>
            <input type="text" class="form-control" name="no_polisi" id="no_polisi" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis" required>
        </div>
        <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" class="form-control" name="merk" id="merk" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" name="warna" id="warna" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
