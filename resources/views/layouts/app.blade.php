<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Aplikasi Antrian Servis')</title>

    <!-- Local CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kaiadmin.css') }}" rel="stylesheet">

    <!-- CDN Bootstrap (jaga-jaga) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Aplikasi Antrian Servis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaksi.index') }}">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('antrian.index') }}">Antrian</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                {{-- Sidebar --}}
                <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('transaksi.index') }}">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Transaksi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('kendaraan.index') }}">
                                    <i class="bi bi-car"></i>
                                    Kendaraan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pelanggan.index') }}">
                                    <i class="bi bi-person"></i>
                                    Pelanggan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('antrian.index') }}">
                                    <i class="bi bi-list-ol"></i>
                                    Antrian
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Main Content --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@yield('content')
                </main>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; {{ date('Y') }} Aplikasi Antrian Servis. All Rights Reserved.</p>
            <p>Developed by <a href="#" class="text-white">Bima Galih Saputra</a></p>
        </footer>
    </div>

    {{-- Modal Konfirmasi Hapus --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <form action="" method="POST" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Local JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/kaiadmin.js') }}"></script>

    @stack('scripts')
    @push('scripts')
<script>
    setTimeout(() => {
        let alert = document.querySelector('.alert');
        if(alert){
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 3000); // hilang setelah 3 detik
</script>
@endpush

</body>

</html>
