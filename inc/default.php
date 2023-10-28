<?php

// Add Website Title Into The Theme
add_theme_support("title-tag");

// Thumbnail Image Area
add_theme_support("post-thumbnails", array("page", "post"));
add_image_size("post-thumbnails", 940, 400, true);


// Excerpt More Button and allows 40 words only
function ah_excerpt_more($more)
{
    return "<br/><a class='readmore-btn' href=" . get_permalink($post->ID) . ">" . "Read More" . "</a>";
};
add_filter("excerpt_more", "ah_excerpt_more");

function ah_excerpt_length($length)
{
    return 40;
};
add_filter("excerpt_length", "ah_excerpt_length", 9999999);


// Page Nav Function 
// function ah_page_nav()
// {
//     global $wp_query, $wp_rewrite;
//     $pages = "";
//     $max = $wp_query->$max_num_pages;
//     if (!$current = get_query_var("paged")) $current = 1;
//     $args["based"] = str_replace(99999999, "%#%", get_pagenum_link(99999999));
//     $args["total"] = $max;
//     $args["current"] = $current;
//     $total = 1;
//     $args["prev_text"] = "Prev";
//     $args["next_text"] = "Next";
//     if($max > 1) echo "<div class='wp_pagenav'>" . 
//     if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>' . $max . '</p>';
//     echo $pages . paginate_links($args);
//     if ($max > 1 ) echo '</div>';
// }
