<?php 
$testimonialStyle = get_field('testimonials_style');
$testimonialImageBackground = get_field('testimonal_background_image');
if( have_rows('testimonials_content') ): 
    $sectionStyle = '';
    if($testimonialStyle == 'testimonials_style_2' && !empty($testimonialImageBackground)) {
        $sectionStyle = 'style="background-image: url(' . $testimonialImageBackground['url'] . ')"';
    }
?>
<section class="home-section our_testimonials <?php echo $testimonialStyle;?>" <?php echo $sectionStyle;?> >
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_attr('Testimonials');?></h2>
        <div class="row  testimonials-reveal slideInRight  delay-2s" >
            <?php while( have_rows('testimonials_content') ): the_row(); ?>
                <div class="testimonials-item col col-12 col-lg-3"  data-aos="fade-up" data-aos-delay="200">
                    <blockquote class="block-blockquote">
                        <?php if($testimonialStyle == 'testimonials_style_2') {?> 
                            <div class="testimonials-item-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i>
                                <i class="eicon-star"></i> 
                                <!-- <span itemprop="ratingValue" class="eicon-screen-only">5/5</span> -->
                            </div>    
                        <?php } ?>

                        <p class="blockquote__content"><?php the_sub_field('customer_say'); ?></p>
                        <p class="blockquote__position">-<?php the_sub_field('customer_name'); ?>.</p>
                    </blockquote>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

