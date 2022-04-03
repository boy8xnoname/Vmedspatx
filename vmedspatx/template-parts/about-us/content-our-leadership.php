
<?php if( have_rows('our_leadership') ): ?>
<section class="about-us-content about-us-leadership">
    <div class="container">
        <h2 class="section-title text-center">Our Exceptional Medical Leadership</h2>

   
            <div class="leadership-list">
            <?php while( have_rows('our_leadership') ): the_row(); 
                $member_image = get_sub_field('member_image');
                ?>
                <div class="leadership-item">
                    <div class="row">
                        <div class="col col-12 col-md-3 col-xl-3">
                            <?php 
                            if(!empty( $member_image)) {
                                echo '<img src="'.esc_url($member_image['url']).'">' ; 
                            } else { 
                               echo get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
                            }?>
                        </div>
                        <div class="col col-12 col-md-9 col-xl-9 d-flex flex-column align-items-flex-start justify-content-center">
                            <h3 class="leadership-name"><?php the_sub_field('member_name'); ?></h3>
                            <h4 class="leadership-position"><?php the_sub_field('member_position'); ?></h4>
                            <div class="leadership-content-des"><?php the_sub_field('member_description'); ?></div>
                        </div>
                    </div>                    
                </div>
            <?php endwhile; ?>
            </div>
        
    </div>
</section>

<?php endif; ?>