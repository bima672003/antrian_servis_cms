<style>
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

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #e0eafc, #cfdef3);
        padding: 30px;
        margin: 0;
        animation: fadeInUp 0.8s ease-in-out;
    }

    h2 {
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 28px;
        text-align: center;
        animation: fadeInUp 0.6s ease-in-out;
    }

    form {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
        animation: fadeInUp 1s ease-in-out;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #007bff;
        outline: none;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px 18px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .back-link {
        display: inline-block;
        margin-top: 25px;
        padding: 12px 20px;
        background: linear-gradient(135deg, #6c757d, #495057);
        color: white;
        text-decoration: none;
        border-radius: 6px;
        transition: background 0.3s ease, transform 0.2s ease;
        animation: fadeInUp 1.2s ease-in-out;
        text-align: center;
        width: 100%;
        max-width: 150px;
        margin: 30px auto 0;
    }

    .back-link:hover {
        background: linear-gradient(135deg, #5a6268, #343a40);
        transform: scale(1.05);
    }
</style>

<h2>Edit Pegawai</h2>

<form method="POST" action="/pegawai/{{ $data['id'] }}">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $data['nama'] }}">

    <label>Jabatan:</label>
    <input type="text" name="jabatan" value="{{ $data['jabatan'] }}">

    <label>ID Transaksi:</label>
    <input type="text" name="id_transaksi" value="{{ $data['id_transaksi'] }}">

    <button type="submit">Update</button>
</form>

<!-- Kembali di tengah -->
<div style="text-align: center; margin-top: 30px;">
    <a href="/pegawai" class="back-link">Kembali</a>
</div>
