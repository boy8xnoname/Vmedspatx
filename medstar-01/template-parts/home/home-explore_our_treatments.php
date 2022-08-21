<?php
	if(wp_is_mobile()){
		$detect = new Mobile_Detect;
        if(!$detect->isTablet() ){
            $explore_our_treatments_img_url = get_field('explore_our_treatments_background_image_mobile') ? get_field('explore_our_treatments_background_image_mobile') : get_field('explore_our_treatments_background_image');
		} else {
            $explore_our_treatments_img_url = get_field('explore_our_treatments_background_image_tablet') ? get_field('explore_our_treatments_background_image_tablet') : get_field('explore_our_treatments_background_image');
		}
	} else {
        $explore_our_treatments_img_url = get_field('explore_our_treatments_background_image');
    }
    $explore_our_treatments_heading  =  strip_tags(get_field('explore_our_treatments_heading'));
    $explore_our_treatments_descriptions  =  get_field('explore_our_treatments_descriptions');
    $explore_our_treatments_button_link  =  get_field('explore_our_treatments_button_link');

    if(!empty($explore_our_treatments_heading) || !empty($explore_our_treatments_descriptions)) :
?>
<section class="home-section explore_our_treatments  section-jarallax" style="background-image: url('<?php echo esc_url($explore_our_treatments_img_url['url']);?>');">
    <div class="container explore_our_treatments_wrap">
        <div class="row">
            <div class="d-none d-lg-block col col-lg-2">
			</div>
            <div class="main col col-lg-8 "  data-aos="fade-up" data-aos-delay="200">
                <?php  if(!empty($explore_our_treatments_heading)) { ?> 
                    <h2 class="content-our-treatments-title text-center">
                        <?php echo esc_attr( $explore_our_treatments_heading);?>
                    </h2>
                <?php } ?>
                <?php  if(!empty($explore_our_treatments_descriptions)) { ?> 
                    <?php echo apply_filters( 'the_content', $explore_our_treatments_descriptions);?>
                <?php } ?>
                <div class="d-flex justify-content-center align-items-center">
                    <?php if(!empty($explore_our_treatments_button_link )) {?>
                        <a href="<?php echo esc_attr($explore_our_treatments_button_link);?>" class="btn btn-book-treatments" role="button">
                            <span class="button-text">BOOK YOUR FREE CONSULTATION</span>
                        </a>
                    <?php } ?>
                    
                </div>
                
			</div>
            <div class="d-none d-lg-block col col-lg-2">
			</div>
        </div>
      
    </div>
</section>
<?php endif; ?>