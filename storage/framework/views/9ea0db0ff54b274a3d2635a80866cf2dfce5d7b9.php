<header id="main-head" class="header-offcanvas">
    <nav id="nav-main" class="navbar navbar-expand-lg text-bg-transparent">
    
        <div class="container">
    
            <!-- Navbar Brand -->
            <a class="navbar-brand" href="<?php echo e($homeUrl); ?>">
                <?php echo e($siteName); ?>

            </a>

            <?php if (isset($component)) { $__componentOriginal47cbb53c90e5d97428e9c4bd5c6f751e01de00d5 = $component; } ?>
<?php $component = App\View\Components\Offcanvas::resolve(['id' => 'offcanvasNavbar','align' => 'left','title' => 'Menu'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Offcanvas::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-bg-dark']); ?>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal47cbb53c90e5d97428e9c4bd5c6f751e01de00d5)): ?>
<?php $component = $__componentOriginal47cbb53c90e5d97428e9c4bd5c6f751e01de00d5; ?>
<?php unset($__componentOriginal47cbb53c90e5d97428e9c4bd5c6f751e01de00d5); ?>
<?php endif; ?>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Toggler -->
            
    
        </div><!-- .container -->
    
      </nav>
</header><!-- .navbar --><?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/sections/header.blade.php ENDPATH**/ ?>