<h2>Daftar Pegawai</h2>
<a href="/pegawai/create">+ Tambah Pegawai</a>
@if(session('message')) <p>{{ session('message') }}</p> @endif
<table border="1" cellpadding="5">
<tr><th>Nama</th><th>Jabatan</th><th>ID Transaksi</th><th>Aksi</th></tr>
@foreach($data as $item)
<tr>
  <td>{{ $item['nama'] }}</td>
  <td>{{ $item['jabatan'] }}</td>
  <td>{{ $item['transaksi_id'] }}</td>
  <td>
    <a href="/pegawai/{{ $item['id'] }}">Lihat</a> |
    <a href="/pegawai/{{ $item['id'] }}/edit">Edit</a> |
    <a href="/pegawai/{{ $item['id'] }}/delete" onclick="return confirm('Yakin hapus?')">Hapus</a>
  </td>
</tr>
@endforeach
</table>
