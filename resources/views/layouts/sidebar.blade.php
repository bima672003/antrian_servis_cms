<!-- resources/views/layouts/sidebar.blade.php -->

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/antrian') }}">Antrian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pelanggan') }}">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/kendaraan') }}">Kendaraan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pegawai') }}">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</a>
            </li>
        </ul>
    </div>
</nav>
