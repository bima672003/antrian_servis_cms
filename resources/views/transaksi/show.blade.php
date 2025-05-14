@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Transaksi</h2>

    <div class="card">
        <div class="card-body">
            <h4>Nama Pelanggan: {{ $transaksi->pelanggan->nama }}</h4>
            <p>No Polisi: {{ $transaksi->kendaraan->no_polisi }}</p>
            <p>Jenis Kendaraan: {{ $transaksi->kendaraan->jenis }}</p>
            <p>Merk: {{ $transaksi->kendaraan->merk }}</p>
            <p>Harga: Rp. {{ number_format($transaksi->harga, 2) }}</p>
        </div>
    </div>
    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Transaksi</a>
</div>
@endsection
