<?php
// Header Area
get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- ============== Blog Post Area ============== -->
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="blog_area">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post_thumb">
                                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail("post-thumbnails"); ?></a>
                            </div>
                            <div class="post_details">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    _e("No post found");
                endif;
                ?>
                <div id="page_nav">
                    <?php if ('ah_page_nav') {
                        ah_page_nav();
                    } else { ?>
                        <?php next_posts_link(); ?>
                        <?php previous_posts_link(); ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3">
                <h2>This is side bar</h2>
            </div>
        </div>
    </div>
</section>

<?php
// Footer Area
get_footer();
?>