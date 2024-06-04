<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

use Illuminate\Support\Facades\Log;

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


// @todo Something like this should be in the filters.php file
function generate_and_save_acf_content($post_id) {
    // Sicherstellen, dass es sich um den richtigen Post-Typ handelt
    if (get_post_type($post_id) !== 'page') {
        return;
    }

    // Überprüfen, ob das ACF-Feld existiert und Daten hat
    if (has_flexible('pageelements', $post_id)) {
        ob_start();  // Output Buffering starten
        
            the_flexible('pageelements');
    
        $content_html = ob_get_clean();  // Buffer in Variable speichern und Buffer löschen

        // Log::info('generate_and_save_acf_content', ['content_html' => $content_html]);
        
        // Inhalt im Post speichern
        remove_action('save_post', 'generate_and_save_acf_content');
        wp_update_post(array(
            'ID'           => $post_id,
            'post_content' => $content_html
        ));
        add_action('save_post', 'generate_and_save_acf_content');
    }
}
add_action('save_post', 'generate_and_save_acf_content');
    