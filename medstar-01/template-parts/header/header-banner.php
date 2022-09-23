<?php 	if ( is_front_page() || is_page_template( 'page-home.php' )) : 
// get home page banner slider
$detect = new Mobile_Detect;
$hero_banner_style = get_field('hero_banner_style');

if(have_rows('setup_banner_items')):
?>
<div class="home-banner slide-<?php echo $hero_banner_style;?>">
    <div class="<?php if($hero_banner_style != 'style3') echo 'home-banner-slider';?> swiper-container swiper-scale-effect">
        <div class="swiper-wrapper">
        <?php
        while( have_rows('setup_banner_items') ) : the_row();
            // Get parent value.
            $banner_image_desktop = get_sub_field('banner_image');
            $banner_image_tablet = get_sub_field('banner_image_tablet');
            $banner_image_mobile = get_sub_field('slider_image_mobile');
            $banner_heading = get_sub_field('banner_heading');
            $banner_link = get_sub_field('banner_link');

            if (!wp_is_mobile()) {
                $banner_image = $banner_image_desktop;
            } else {
                if(empty($banner_image_mobile)) {
                    $banner_image = $banner_image_desktop;
                } else {
                    // Any tablet device.
                    if(!$detect->isTablet() ){
                        // Image for mobile banner will here
                        $banner_image = $banner_image_mobile;
                    } else {
                        if(empty($banner_image_tablet)) {
                            $banner_image =  $banner_image_mobile;
                        } else {
                            $banner_image = $banner_image_tablet;
                        }
                    }
                }
            } 

            if (!empty($banner_link)) {
                $banner_link_start = '<a href="' . $banner_link . '">';
                $banner_link_end   = '</a>';
            }
            if($hero_banner_style == 'style1') {?> 
                <?php if(!empty($banner_image)) {
                    ?> 
                    <div class="swiper-slide">
                        <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                            <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                        </div>
                        <div class="card-content">
                            <?php echo apply_filters('the_content', $banner_heading);?>
                            <div class="card-action">
                            <?php  if (!empty($banner_link)) {
                                echo $banner_link_start;
                                echo apply_filters('medstar_home_read_more_text', esc_attr('BOOK NOW'));
                                echo $banner_link_end;
                            }?> 
                            </div>
                        </div>
                    </div>
                <?php } ?>               
            <?php } else {?>
                <?php if(!empty($banner_image)) {?> 
                    <div class="swiper-slide slide-<?php echo $hero_banner_style;?>">
                        <div class="card-image" style="background-image: url('<?php echo esc_url($banner_image['url']);?>')">
                            <img class="d-hide d-none" src="<?php echo esc_url($banner_image['url']);?>" alt="Image Slider">
                        </div>
                        <div class="card-content">
                            <?php echo apply_filters('the_content', $banner_heading);?>
                            <div class="card-action">
                            <?php  if (!empty($banner_link)) {
                                echo $banner_link_start;
                                echo apply_filters('medstar_read_more_text', esc_attr('READ MORE'));
                                echo $banner_link_end;
                            }?> 
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
