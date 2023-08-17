<header id="main-head" class="header-offcanvas">
    <nav id="nav-main" class="navbar navbar-expand-lg text-bg-transparent">
    
        <div class="container">
    
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="{{ $homeUrl }}">
                {{ $siteName }}
            </a>

            <x-offcanvas id="offcanvasNavbar" class="text-bg-dark" align="left" title="Menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary_navigation',
                        'container'         => false,
                        'menu_class'        => '',
                        'fallback_cb'       => '__return_false',
                        'items_wrap'        => '<ul id="primary-navbar" class="navbar-nav me-auto %2$s">%3$s</ul>',
                        'depth'             => 2,
                        'list_item_class'   => 'nav-item',
                        'link_class'        => 'nav-link'
                        // 'walker' => new App\bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
            </x-offcanvas>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Toggler -->
            {{-- <button class="btn btn-outline-dark d-xl-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                {!! $burgerIcon !!}
            </button> --}}
    
        </div><!-- .container -->
    
      </nav>
</header><!-- .navbar -->