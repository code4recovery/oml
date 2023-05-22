<?php

add_action('wp_enqueue_scripts', function () {

    // dynamically get javascript
    $files = glob(ABSPATH . '/static/js/main.*.js');
    $file = str_replace(ABSPATH, '', $files[0]);
    wp_enqueue_script('oml', $file, [], false, true);

    // dynamically get stylesheet
    $template = strtolower(get_template());
    wp_enqueue_style('oml', plugin_dir_url(__FILE__) . $template . '.css', [], null);
});

get_header();

// render div to be hydrated
echo '<div id="root"></div>';

get_footer();
