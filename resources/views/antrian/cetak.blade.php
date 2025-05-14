<!DOCTYPE html>
<html>
<head>
    <title>Cetak Bukti Antrian</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { border: 1px solid #000; padding: 20px; width: 500px; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bukti Antrian Servis</h2>
        <p><strong>No. Antrian:</strong> {{ $antrian->id }}</p>
        <p><strong>Nama Pelanggan:</strong> {{ $antrian->nama_pelanggan }}</p>
        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($antrian->created_at)->format('d-m-Y H:i') }}</p>
        <p><strong>Keluhan:</strong> {{ $antrian->keluhan }}</p>
    </div>

    <script>
        window.print(); // Otomatis munculkan dialog print saat dibuka
    </script>
</body>
</html>
