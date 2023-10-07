<div class="next-prev-photo">
    <div class="prev_photo">
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();

        if (!empty($prev_post)) {
            $prev_image = get_the_post_thumbnail_url($prev_post->ID);
            previous_post_link('<span class="left"><img src="' . $prev_image . '" alt="' . $prev_post->post_title . '" width="75" height="75"/> <a href="' . get_permalink($prev_post) . '" rel="prev"><img class="arrowleft" src="' . get_stylesheet_directory_uri() . 
            '/images/arrow_left.png"></a></span>', '%title', false);
            }
            ?>
    </div>
    <div class="next_photo">
        <?php
            if (!empty($next_post)) {
                $next_image = get_the_post_thumbnail_url($next_post->ID);
                next_post_link('<span class="right"><img src="' . $next_image . '" alt="' . $next_post->post_title . '" width="75" height="75"/> <a href="' . get_permalink($next_post) . '" rel="next"><img src="' . get_stylesheet_directory_uri() . 
                '/images/arrow_right.png"></a></span>', '%title', false);
            }
            ?>
    </div>
</div>
            