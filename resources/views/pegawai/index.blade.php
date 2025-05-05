<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        padding: 30px;
        margin: 0;
        animation: fadeInUp 0.8s ease-in-out;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h2 {
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 28px;
        animation: fadeInUp 0.6s ease-in-out;
    }

    a.button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 15px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        animation: fadeInUp 1s ease-in-out;
    }

    a.button:hover {
        background-color: #218838;
        transform: scale(1.05);
    }

    .message {
        background-color: #d4edda;
        color: #155724;
        padding: 12px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 20px;
        animation: fadeInUp 1.2s ease-in-out;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
        animation: fadeInUp 1.5s ease-in-out;
    }

    th, td {
        padding: 14px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    th {
        background-color: #343a40;
        color: white;
        font-size: 18px;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    td {
        font-size: 16px;
        color: #495057;
    }

    .actions a {
        margin-right: 12px;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .actions a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
</style>

<h2>Daftar Pegawai</h2>

<a href="/pegawai/create" class="button">+ Tambah Pegawai</a>

@if(session('message'))
    <div class="message">{{ session('message') }}</div>
@endif

<table>
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>ID Transaksi</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['jabatan'] }}</td>
        <td>{{ $item['transaksi_id'] }}</td>
        <td class="actions">
            <a href="/pegawai/{{ $item['id'] }}">Lihat</a>
            <a href="/pegawai/{{ $item['id'] }}/edit">Edit</a>
            <a href="/pegawai/{{ $item['id'] }}/delete" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
