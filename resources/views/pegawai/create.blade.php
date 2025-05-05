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

    form:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    label {
        display: block;
        margin-bottom: 10px;
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
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #28a745;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        outline: none;
    }

    button[type="submit"] {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button[type="submit"]:hover {
        background-color: #218838;
        transform: scale(1.05);
    }
</style>

<h2>Tambah Pegawai</h2>

<form method="POST" action="/pegawai">
    @csrf

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">

    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan">

    <label for="id_transaksi">ID Transaksi:</label>
    <input type="text" id="id_transaksi" name="id_transaksi">

    <button type="submit">Simpan</button>
</form>
