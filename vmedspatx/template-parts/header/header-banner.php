<?php 	if ( is_front_page()) : 
// get home page banner slider
if(have_rows('setup_banner_items')):
?>
<div class="home-banner">
    <div class="home-banner-slider swiper-container swiper-scale-effect">
        <div class="swiper-wrapper">
<?php
        while( have_rows('setup_banner_items') ) : the_row();
            // Get parent value.
            $banner_image = get_sub_field('banner_image');
            $banner_heading = get_sub_field('banner_heading');
            $banner_link = get_sub_field('banner_link');
            ?>
            <div class="swiper-slide">
                <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                    <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                </div>
                <div class="card-content">
                    <?php echo apply_filters('the_content', $banner_heading);?>
                </div>
            </div>
            <?php
    
        endwhile;
?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Scrollbar -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        </div>
    </div>
</div>
<?php
    endif; 
?>
    
<?php else : ?>
    <div class="inner-page-banner">
    </div>
<?php endif;?>
