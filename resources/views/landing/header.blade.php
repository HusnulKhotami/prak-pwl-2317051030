<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50;">
    <div class="container-fluid px-3">

        <a class="navbar-brand d-flex align-items-center fw-bold text-white ms-0" href="{{ url('/') }}">
            <img src="{{ asset('image/logonew.jpg') }}" 
                 alt="Logo" 
                 width="40" height="40" 
                 class="me-2" 
                 style="object-fit: cover; border-radius: 50%;">
            Sistem Create User
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="{{ route('user.index') }}">
                        <i class="bi bi-people"></i> Daftar User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="{{ route('user.create') }}">
                        <i class="bi bi-person-plus"></i> Tambah User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
