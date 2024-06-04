<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Need to place these functions for PageElements here
 * bc the 'Composer' wont render on backend
 */
add_filter('acfe/flexible/render/template/name=pageelements', function ($acfe_flexible_render_template, $field, $layout, $is_preview) {
    // do_action( 'qm/debug', view('components._renderer', [ 'name' => 'text', 'fields' => [] ]) );
    return get_stylesheet_directory() . '/../index.php';
}, 99, 4);

add_action('acfe/flexible/render/before_template/name=pageelements', function ($field, $layout, $is_preview) {
    
    $values = [];

    foreach ($layout['sub_fields'] as $field) {
        $values[ $field['name'] ] = get_sub_field($field['name']);
    }

    $layoutName = str_replace('_', '-', $layout['name']);

    // maybe we can fix this and make it more... beautiful
    // echo view('partials.headlines');
    
    echo view('elements._renderer', [ 'name' => $layoutName ]);

    // maybe we can fix this and make it more... beautiful
    // echo view('partials.buttons');

}, 10, 3);