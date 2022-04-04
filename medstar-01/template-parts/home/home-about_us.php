<?php
    $about_us_title = get_field('about_us_title');
    $about_us_description = get_field('about_us_description');
    $about_us_learn_more_link = get_field('about_us_learn_more_link');
    if(!empty($about_us_title) || !empty($about_us_description)):
?>
<section class="home-section about_us">
    <div class="container">
        <div class="row about-us-top">
            <div class="d-none d-lg-block col col-lg-2">
            </div>
            <div class="col about-us-main col-lg-8">
                <?php if(!empty($about_us_title)) :
                    echo '<h2 class="section-title text-center">'.$about_us_title.'</h2>';
                endif;

                if(!empty($about_us_description)) :
                    echo '<div class="about-us-description text-center">'.$about_us_description.'</div>';
                endif;
                ?>

                <div class="d-flex justify-content-center">
                    <?php if(!empty( $about_us_learn_more_link)) :
                        echo '<a class="btn btn-view-more" href="'.$about_us_learn_more_link.'">LEARN MORE</a>';
                    endif;?>
                </div>
            </div>
            <div class="d-none d-lg-block col col-lg-2">
            </div>
        </div>
       
       <?php if( have_rows('about_us_video') ): ?>
        <?php while( have_rows('about_us_video') ): the_row(); 
            // Get sub field values.
            $video_image_thumb = get_sub_field('video_image_thumb');
            $video_link = get_sub_field('video_link');
            ?>
            <div id="about-us-hero" class="about-us-hero">
                <img src="<?php echo $video_image_thumb['url']; ?>" alt="<?php echo esc_attr( $about_us_title ); ?>" />
                <div class="play-video-content">
                    <a class="btn-play-video popup-youtube" href="<?php echo esc_url( $video_link ); ?>">
                        <i aria-hidden="true" class="eicon-play"></i>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
      
    </div>
</section>
<?php endif; ?>