<!-- resources/views/antrian/index.blade.php -->
@extends('layouts.app')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('content')
    <h1>Daftar Antrian</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Antrian</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($antrians as $antrian)
                <tr>
                    <td>{{ $antrian->id }}</td>
                    <td>{{ $antrian->nomor_antrian }}</td>
                    <td>{{ $antrian->tanggal }}</td>
                    <td>{{ $antrian->status }}</td>
                    <td>
                        <!-- Tindakan seperti edit, delete -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
