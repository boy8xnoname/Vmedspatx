<?php 
    $explore_our_treatments_img_url = get_field('explore_our_treatments_background_image');
    $explore_our_treatments_heading  =  get_field('explore_our_treatments_heading');
    $explore_our_treatments_descriptions  =  get_field('explore_our_treatments_descriptions');
    if(!empty($explore_our_treatments_heading) || !empty($explore_our_treatments_descriptions)) :
?>
<section class="home-section explore_our_treatments  section-jarallax" style="background-image: url('<?php echo esc_url($explore_our_treatments_img_url['url']);?>');">
    <div class="container explore_our_treatments_wrap">
        <div class="row">
            <div class="d-none d-lg-block col col-lg-2">
			</div>
            <div class="main col col-lg-8 reveal bounce delay-4s">
                <?php  if(!empty($explore_our_treatments_heading)) { ?> 
                    <h2 class="content-our-treatments-title text-center">
                        <?php echo esc_attr( $explore_our_treatments_heading);?>
                    </h2>
                <?php } ?>
                <?php  if(!empty($explore_our_treatments_descriptions)) { ?> 
                    <?php echo apply_filters( 'the_content', $explore_our_treatments_descriptions);?>
                <?php } ?>

                <a href="#book-treatments" class="btn btn-book-treatments" role="button">
                    <span class="button-text">BOOK YOUR FREE CONSULTATION</span>
                </a>
			</div>
            <div class="d-none d-lg-block col col-lg-2">
			</div>
        </div>
      
    </div>
</section>
<?php endif; ?>