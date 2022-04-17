<?php if( have_rows('testimonials_content') ): ?>
    <section class="home-section our_testimonials">
    <div class="container">
        <h2 class="section-title text-center">Testimonials</h2>
        <div class="row  testimonials-reveal slideInRight  delay-2s" >
            
            <?php while( have_rows('testimonials_content') ): the_row(); ?>
                <div class="col col-12 col-lg-3"  data-aos="fade-up" data-aos-delay="200">
                    <blockquote class="block-blockquote">
                        <p class="blockquote__content"><?php the_sub_field('customer_say'); ?></p>
                        <p class="blockquote__position">-<?php the_sub_field('customer_name'); ?>.</p>
                    </blockquote>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

