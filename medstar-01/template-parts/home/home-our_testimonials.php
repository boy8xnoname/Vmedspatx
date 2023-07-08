<?php
global $post;
if ( get_field('home_page_parent', $post->ID ) ) {
    $parent = get_field('home_page_parent', $post->ID );
} else {
    $parent = $post->ID;
}

$testimonialStyle = get_field('testimonials_style', $parent);
$testimonialImageBackground = get_field('testimonal_background_image', $parent);
if( have_rows('testimonials_content', $parent) ): 
    $sectionStyle = '';
    if(($testimonialStyle == 'testimonials_style_2' || $testimonialStyle == 'testimonials_style_3') && !empty($testimonialImageBackground)) {
        $sectionStyle = 'style="background-image: url(' . $testimonialImageBackground['url'] . ')"';
    }
?>
<section class="home-section our_testimonials <?php echo $testimonialStyle;?> <?php if($testimonialStyle == 'testimonials_style_2' || $testimonialStyle == 'testimonials_style_3') echo 'section-jarallax"'; ?>" <?php echo $sectionStyle;?> >
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_attr('Testimonials');?></h2>
        <div class="row  testimonials-reveal slideInRight justify-content-center delay-2s" >
            <?php while( have_rows('testimonials_content', $parent) ): the_row(); ?>
                <div class="testimonials-item col col-12 col-lg-4"  data-aos="fade-up" data-aos-delay="200">
                    <blockquote class="block-blockquote">
                        <?php if($testimonialStyle == 'testimonials_style_2') {?>
                            <div class="testimonials-item-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                            </div>    
                        <?php } ?>
                        <p class="blockquote__content"><?php the_sub_field('customer_say'); ?></p>
						<?php if($testimonialStyle == 'testimonials_style_3') {?>
							<div class="testimonials-item-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
								<i class="eicon-star"></i>
								<i class="eicon-star"></i>
								<i class="eicon-star"></i>
								<i class="eicon-star"></i>
								<i class="eicon-star"></i>
							</div>
						<?php } ?>
                        <p class="blockquote__position">-<?php the_sub_field('customer_name'); ?>.</p>
                    </blockquote>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

