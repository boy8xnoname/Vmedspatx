<?php
    global $post;
    if ( get_field('home_page_parent', $post->ID ) ) {
        $parent = get_field('home_page_parent', $post->ID );
    } else {
        $parent = $post->ID;
    }
    $add_instagram_feed_title = strip_tags(get_field('add_instagram_feed_title', $parent), '<br><span><img>');
    $instagram_feed_url = get_field('instagram_feed_url', $parent);
    $instagram_account_name = get_field('instagram_account_name', $parent);
    $instagram_feed_shortcode = get_field('instagram_feed_shortcode', $parent);
    if (!empty($instagram_feed_url)) {
        $instagram_feed_url_start = '<a href="' . $instagram_feed_url . '" target="_blank">';
        $instagram_feed_url_end   = '</a>';
    }

    if(!empty($instagram_feed_shortcode)):
?>
    <section class="home-section instagram_feed">
        <div class="container">
            <div class="instagram_feed_wrap">
                <?php if(!empty($add_instagram_feed_title)) {
                    if (!empty($instagram_feed_url)) {
                        echo '<h2 class="section-title text-center">'.$instagram_feed_url_start.  $add_instagram_feed_title. $instagram_feed_url_end. '</h2>';
                    }  else  {
                        echo '<h2 class="section-title text-center">'.  $add_instagram_feed_title. '</h2>';
                    }?>
                <?php } ?> 
                <?php if(!empty($add_instagram_feed_title)) {
                    echo '<h2 class="account-name text-center">'. $instagram_account_name.'</h2>';
                 } ?> 

                <?php echo do_shortcode($instagram_feed_shortcode); ?>
            </div>
        </div>
    </section>
<?php endif; ?>