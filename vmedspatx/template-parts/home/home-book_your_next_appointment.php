<?php
    $book_appointment_image = get_field('book_appointment_image');
    $book_your_next_appointment_title = get_field('book_your_next_appointment_title');
    $book_appointment_button_title = if(isset(get_field('book_appointment_button_title'))) ? get_field('book_appointment_button_title') : 'CONTACT US';
    $book_appointment_button_link = if(isset(get_field('book_appointment_button_link') )) ? get_field('book_appointment_button_link') : '#';
    if(!empty($book_your_next_appointment_title) || !empty($book_appointment_button_link)):
?>
<section class="home-section book_your_next_appointment">
    <div class="container">
        <div class="row about-us-top">
            <div class="col col-lg-2">
            </div>
            <div class="book_your_next_appointment_main col col-lg-8">
                <?php if(!empty($book_your_next_appointment_title)) :
                    echo '<h2 class="section-title text-center">'.$book_your_next_appointment_title.'</h2>';
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
            <div class="col col-lg-2">
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
                    <a class="btn btn-play-video" href="<?php echo esc_url( $video_link ); ?>">
                        <i aria-hidden="true" class="eicon-play"></i>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
      
    </div>
</section>
<?php endif; ?>