<?php 	if ( is_front_page() || is_page_template( 'page-home.php' )) : 
// get home page banner slider

$hero_banner_style = get_field('hero_banner_style');
if(have_rows('setup_banner_items')):
?>
<div class="home-banner slide-<?php echo $hero_banner_style;?>">
    <div class="home-banner-slider swiper-container swiper-scale-effect">
        <div class="swiper-wrapper">
        <?php
        while( have_rows('setup_banner_items') ) : the_row();
            // Get parent value.
            $banner_image = get_sub_field('banner_image');
            $banner_image_mobile = get_sub_field('slider_image_mobile');
            $banner_heading = get_sub_field('banner_heading');
            $banner_link = get_sub_field('banner_link');

            if (!empty($banner_link)) {
                $banner_link_start = '<a href="' . $banner_link . '">';
                $banner_link_end   = '</a>';
            }
            if($hero_banner_style == 'style1') {?> 
                <div class="swiper-slide">
                            <?php if(!empty($banner_image_mobile)) {
                                if(wp_is_mobile()) {  ?> 
                                    <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image_mobile['url']);?>')">
                                        <img class="d-hide d-none" src="<?php echo esc_url($banner_image_mobile['url']);?>" alt="Image Slider">
                                    </div>
                                <?php } else {?>
                                    <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                                        <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                                    </div>
                                <?php } ?>
                            <?php } else {?>
                                <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                                    <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                                </div>
                            <?php } ?>
                       
                        <div class="card-content">
                            <?php echo apply_filters('the_content', $banner_heading);?>
                            <div class="card-action">
                            <?php  if (!empty($banner_link)) {
                                echo $banner_link_start;
                                echo esc_attr('READ MORE','medstar01');
                                echo $banner_link_end;
                            }?> 
                            </div>
                        </div>
                </div>
            <?php } else {?>
                <div class="swiper-slide slide-<?php echo $hero_banner_style;?>">
                        <?php if(!empty($banner_image_mobile)) {
                            if(wp_is_mobile()) {  ?> 
                                <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image_mobile['url']);?>')">
                                    <img class="d-hide d-none" src="<?php echo esc_url($banner_image_mobile['url']);?>" alt="Image Slider">
                                </div>
                            <?php } else {?>
                                <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                                    <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                                </div>
                            <?php } ?>
                        <?php } else {?>
                            <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                                <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                            </div>
                        <?php } ?>
                    <div class="card-content">
                        <?php echo apply_filters('the_content', $banner_heading);?>
                        <div class="card-action">
                        <?php  if (!empty($banner_link)) {
                            echo $banner_link_start;
                            echo esc_attr('READ MORE','medstar01');
                            echo $banner_link_end;
                        }?> 
                        </div>
                    </div>
                </div>
            <?php } ?>
            
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
