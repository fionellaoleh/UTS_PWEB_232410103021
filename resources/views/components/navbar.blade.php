<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('asset/unej.png') }}" alt="UNEJ" class="me-2" style="height: 50px;">
            <img src="{{ asset('asset/ukmkk.png') }}" alt="Logo" class="me-2" style="height: 50px;">
            <span class="fw-bold">UKM Kerohanian Kristen</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
                       href="{{ route('dashboard', request()->query()) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}" 
                       href="{{ route('pengelolaan') }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" 
                       href="{{ route('profile', request()->query()) }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
