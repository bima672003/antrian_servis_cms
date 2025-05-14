<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Sidebar Toggle (optional, for responsive layout) -->
        <button class="btn btn-outline-secondary me-2" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>

        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <strong>KaiAdmin</strong>
        </a>

        <!-- Collapse for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <!-- User Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> {{ Auth::user()->name ?? 'Guest' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        @auth
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
