<?php

// Theme Development

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="no-js">
    <header id="header_area" class="<?php echo get_theme_mod("ah_menu_position"); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_theme_mod("ah_logo"); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array("theme_location" => "main_menu", "menu_id" => "nav")); ?>
                </div>
            </div>
        </div>
    </header>
    <main class="body_area">