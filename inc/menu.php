<?php

// Menu Register
register_nav_menu("main_menu", __("Main Menu", "themelearning"));


// Walker Menu Properties
function ah_nav_menu_description($item_output, $item, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . "</a>", "<span class='walker_nav'>" . $item->description . "</span>" . $args->link_after . "</a>", $item_output);
    };
    return $item_output;
};
add_filter("walker_nav_menu_start_el", "ah_nav_menu_description", 10, 3);
