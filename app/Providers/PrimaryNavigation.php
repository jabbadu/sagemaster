<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PrimaryNavigation extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        
        add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
            if ($args->theme_location != 'primary_navigation') {
                return $atts;
            }

            if (property_exists($args, 'link_class')) {
                $atts['class'] = $args->link_class;
            }
            return $atts;
        }, 1, 3 );

        add_filter('nav_menu_css_class', function($classes, $item, $args) {
            if ($args->theme_location != 'primary_navigation') {
                return $classes;
            }

            if (property_exists($args, 'list_item_class')) {
                $classes[] = $args->list_item_class;
            }
            return $classes;
        }, 1, 3);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
