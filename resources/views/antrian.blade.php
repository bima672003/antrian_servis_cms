<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Servis Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
        }
        form, table {
            margin: auto;
            width: 80%;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        input, button {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        table {
            margin-top: 30px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }
        .alert {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1> Antrian Servis CAHYABIMA Motor </h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <div class="container mt-4">
    <h2 class="mb-4 text-center">{{ isset($antrian) ? 'Edit' : 'Tambah' }} Antrian Servis Motor</h2>
    <form action="{{ isset($antrian) ? route('antrian.update', $antrian->id) : route('antrian.store') }}" method="POST" class="card p-4 shadow">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $antrian->nama ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" class="form-control" value="{{ $antrian->jenis_kendaraan ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Merek Kendaraan</label>
            <input type="text" name="merek_kendaraan" class="form-control" value="{{ $antrian->merek_kendaraan ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Servis</label>
            <input type="text" name="jenis_servis" class="form-control" value="{{ $antrian->jenis_servis ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Waktu</label>
            <input type="time" name="waktu" class="form-control" value="{{ $antrian->waktu ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Biaya (Rp)</label>
            <input type="number" name="biaya" class="form-control" value="{{ $antrian->biaya ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">
            {{ isset($antrian) ? 'Update' : 'Tambah' }} Antrian
        </button>
    </form>
<div class="container mt-5">
    <h4 class="mb-3 text-center">Daftar Antrian Servis</h4>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kendaraan</th>
                <th>Merek</th>
                <th>Jenis Servis</th>
                <th>Waktu</th>
                <th>Biaya</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($antrians as $index => $item)
                @if(isset($antrian) && $antrian->id === $item->id)
                    @continue
                @endif
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kendaraan }}</td>
                    <td>{{ $item->merek_kendaraan }}</td>
                    <td>{{ $item->jenis_servis }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>Rp{{ number_format($item->biaya, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('antrian.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('antrian.destroy', $item->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data antrian.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>