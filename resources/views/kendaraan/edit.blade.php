@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kendaraan</h2>

    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="no_polisi">No Polisi</label>
            <input type="text" class="form-control" name="no_polisi" id="no_polisi" value="{{ $kendaraan->no_polisi }}" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis" value="{{ $kendaraan->jenis }}" required>
        </div>
        <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" class="form-control" name="merk" id="merk" value="{{ $kendaraan->merk }}" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" name="warna" id="warna" value="{{ $kendaraan->warna }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
