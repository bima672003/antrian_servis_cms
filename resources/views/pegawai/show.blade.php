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

    .detail-box {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeInUp 1s ease-in-out;
    }

    .detail-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .detail-box p {
        font-size: 17px;
        color: #444;
        margin: 16px 0;
        line-height: 1.5;
        transition: color 0.3s ease;
    }

    .detail-box p:hover {
        color: #000;
    }

    .detail-box p b {
        color: #007bff;
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

    /* Center the back-link */
    .back-link {
        display: block;
        margin: 30px auto;
        text-align: center;
    }
</style>

<h2>Detail Pegawai</h2>

<div class="detail-box">
    <p><b>Nama:</b> {{ $data['nama'] }}</p>
    <p><b>Jabatan:</b> {{ $data['jabatan'] }}</p>
    <p><b>ID Transaksi:</b> {{ $data['transaksi_id'] }}</p>
</div>

<a href="/pegawai" class="back-link">Kembali</a>
