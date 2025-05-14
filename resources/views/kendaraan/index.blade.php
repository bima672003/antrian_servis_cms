@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Kendaraan</h2>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No Polisi</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Warna</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->no_polisi }}</td>
                    <td>{{ $kendaraan->jenis }}</td>
                    <td>{{ $kendaraan->merk }}</td>
                    <td>{{ $kendaraan->warna }}</td>
                    <td>
                        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
