<?php
    $about_us_title = get_field('about_us_title');
    $about_us_image = get_field('about_us_image');
    $about_us_description = get_field('about_us_description');
    $about_us_learn_more_link = get_field('about_us_learn_more_link');
    if(!empty($about_us_title) || !empty($about_us_description)):
?>
<section class="home-section about_us">
    <div class="container">
        <div class="row about-us-top">
            
            <div class="about-us-image col col-12 col-md-5">
                <?php if(!empty($about_us_image)) { ?>
                    <img src="<?php echo $about_us_image['url']; ?>" alt="<?php echo esc_attr( $about_us_title ); ?>" />
                <?php } else {} ?>
            </div>
            <div class="about-us-main d-flex align-items-center col  col-12 col-md-7">
                <div class="about-us-main-wrap">
                    <?php if(!empty($about_us_title)) :
                        echo '<h2 class="section-title">'.$about_us_title.'</h2>';
                    endif;

                    if(!empty($about_us_description)) :
                        echo '<div class="about-us-description">'.$about_us_description.'</div>';
                    endif;
                    ?>

                    <div class="d-flex justify-content-start">
                        <?php if(!empty( $about_us_learn_more_link)) :
                            echo '<a class="btn btn-view-more" href="'.$about_us_learn_more_link.'">'.esc_attr('LEARN MORE', 'medstar01').'</a>';
                        endif;?>
                    </div>
                </div>
            </div>
            
        </div>
       
      
    </div>
</section>
<?php endif; ?>