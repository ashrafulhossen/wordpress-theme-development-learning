<?php

// Enqueue CSS And JS File
function ah_enqueue_css_and_js_file()
{
    // Enqueue CSS File
    wp_enqueue_style("ah_styles", get_stylesheet_uri());
    wp_enqueue_style("ah_custom", get_template_directory_uri() . "/css/custom.css", array(), "1.0.0", "all");
    wp_enqueue_style("ah_bootstrap", get_template_directory_uri() . "/css/bootstrap.css", array(), "5.3.2", "all");

    // Enqueue JS File
    wp_enqueue_script("jquery");
    wp_enqueue_script("ah_main", get_template_directory_uri() . "/js/main.js", array(), "1.0.0", "true");
    wp_enqueue_script("ah_bootstrap", get_template_directory_uri() . "/js/bootstrap.js", array(), "5.3.2", "true");
};
add_action("wp_enqueue_scripts", "ah_enqueue_css_and_js_file");

// Enqueue Google Fonts
function ah_enqueue_google_fonts()
{
    wp_enqueue_style("ah_google_fonts", "https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap", false);
};
add_action("wp_enqueue_scripts", "ah_enqueue_google_fonts");
