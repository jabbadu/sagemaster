<div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

        <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary_navigation',
                'container'         => false,
                'menu_class'        => 'nav flex-column',
                'fallback_cb'       => '__return_false',
                'items_wrap'        => '<ul id="primary-navbar" class="nav me-auto %2$s">%3$s</ul>',
                'depth'             => 2,
                'list_item_class'   => 'nav-item',
                'link_class'        => 'nav-link d-flex align-items-center gap-2'
                // 'walker' => new App\bootstrap_5_wp_nav_menu_walker()
            ));
        ?>
    
        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                @svg('gear-wide-connected')
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                @svg('door-closed')
                    Sign out
                </a>
            </li>
        </ul>

    </div>
</div>