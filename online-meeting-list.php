<?php
/*
 * Plugin Name: Online Meeting List
 */

$oml_slug = 'meetings';

add_action('init', function () {
    global $oml_slug;
    add_rewrite_rule("^$oml_slug/(.*)?", "index.php?pagename=$oml_slug", 'top');
});

add_filter('page_template', function ($page_template) {
    global $oml_slug;
    if (is_page($oml_slug)) {
        return __DIR__ . '/page-template.php';
    }
    return $page_template;
});
