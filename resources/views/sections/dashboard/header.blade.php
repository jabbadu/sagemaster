<header id="main-head" class="navbar sticky-top bg-body-tertiary flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <!-- Navbar Brand -->
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="{{ $homeUrl }}">
        {{ $siteName }}
    </a>

    <ul class="navbar-nav flex-row ms-auto">
        <li class="nav-item text-nowrap d-none">
            <button class="nav-link px-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                @svg('search')
            </button>
        </li>
        <li class="nav-item text-nowrap d-md-none">
            <button class="nav-link px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                @svg('list', 'burger-menu-svg')
            </button>
        </li>
    </ul>

    <div class="theme-switcher mx-3">
        @includeIf('partials.theme-switcher')
    </div>
            
      <!-- .container -->
</header><!-- .navbar -->