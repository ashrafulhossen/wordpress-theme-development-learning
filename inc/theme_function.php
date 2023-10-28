<?php

/* ========================================
          Theme Customizer Register
======================================== */

function ah_customizer_register($wp_customize)
{
    /* ==================== Theme Header Area ==================== */
    // Header Logo
    $wp_customize->add_section("ah_head_area", array(
        "title" => __("Header Area", "themelearning"),
        "description" => __("If you want to customize your head area. You can do it from here", "themelearning"),
    ));

    $wp_customize->add_setting("ah_logo", array(
        "default" => get_bloginfo("template_directory") . "/images/logo.png"
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "ah_logo", array(
        "label" => __("Upload Logo Image", "themelearning"),
        "description" => __("If you want to customize your head area. You can do it from here", "themelearning"),
        "setting" => "ah_logo",
        "section" => "ah_head_area",
    )));

    // Menu Position Option
    $wp_customize->add_section("ah_menu_option", array(
        "title" => __("Menu Position Option", "themelearning"),
        "description" => __("If you want to change your menu position. You can do it from here", "themelearning")
    ));

    $wp_customize->add_setting("ah_menu_position", array(
        "default" => "right_menu"
    ));

    $wp_customize->add_control("ah_menu_position", array(
        "label" => "Menu Position",
        "description" => __("Change your menu position.", "themelearning"),
        "setting" => "ah_menu_position",
        "section" => "ah_menu_option",
        "type" => "radio",
        "choices" => array(
            "left_menu" => "Left Menu",
            "right_menu" => "Right Menu",
            "center_menu" => "Center Menu"
        )
    ));

    /* ==================== Theme Footer Area ==================== */
    // Footer Copyright Section
    $wp_customize->add_section("ah_footer_area", array(
        "title" => __("Footer Area", "themelearning"),
        "description" => __("If you want to customize your footer. You can do it from here")
    ));

    $wp_customize->add_setting("ah_footer_copyright_section", array(
        "default" => "&copy; Copyright 2023 | Theme Learning"
    ));

    $wp_customize->add_control("ah_footer_copyright_section", array(
        "label" => "Change Copyright Section",
        "description" => "If you want to customize your copyright section. You can do it from here",
        "setting" => "ah_footer_copyright_section",
        "section" => "ah_footer_area"
    ));
};
add_action("customize_register", "ah_customizer_register");
