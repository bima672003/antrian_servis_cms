@extends('layouts.app')

@section('content')
    <h2>Detail Pelanggan</h2>

    <div>
        <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
        <p><strong>No HP:</strong> {{ $pelanggan->no_hp }}</p>
        <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
    </div>

    <a href="{{ route('pelanggan.index') }}">Kembali</a>
@endsection
