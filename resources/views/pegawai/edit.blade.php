<h2>Edit Pegawai</h2>
<form method="POST" action="/pegawai/{{ $data['id'] }}">
@csrf
Nama: <input type="text" name="nama" value="{{ $data['nama'] }}"><br>
Jabatan: <input type="text" name="jabatan" value="{{ $data['jabatan'] }}"><br>
ID Transaksi: <input type="text" name="id_transaksi" value="{{ $data['id_transaksi'] }}"><br>
<button type="submit">Update</button>
</form>
<a href="/pegawai">Kembali</a>
