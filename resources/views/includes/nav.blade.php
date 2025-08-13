    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{ url('/') }}" class="navbar-brand ps-5 me-0">
            <img src="{{ asset('img/logo.jpg')}}" alt="VMML Logo" height="50">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Services</a>
                <a href="{{ url('process') }}" class="nav-item nav-link {{ request()->is('process') ? 'active' : '' }}">Process</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->