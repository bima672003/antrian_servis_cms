<h2>Tambah Pegawai</h2>
<form method="POST" action="/pegawai">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="nama"><br>

    <label>Jabatan:</label><br>
    <input type="text" name="jabatan"><br>

    <label>ID Transaksi:</label><br>
    <input type="text" name="id_transaksi"><br><br>

    <button type="submit">Simpan</button>
</form>
