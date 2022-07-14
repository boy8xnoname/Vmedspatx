<?php if( have_rows('about_us_content_bottom') ): ?>
    <?php while( have_rows('about_us_content_bottom') ): the_row(); 
        $about_us_bottom_heading = strip_tags(get_sub_field('content_heading'), '<br><span><img>');
        $about_us_bottom_content = get_sub_field('content_description');
        if (!empty($about_us_bottom_content) || !empty($about_us_bottom_content)) {
            ?>
        <section class="about-us-content about-us-content-bottom">
            <div class="container">
                <?php if (!empty($about_us_bottom_heading)) :?>
                    <h2 class="section-title text-center"><?php echo $about_us_bottom_heading; ?></h2>
                <?php endif; ?> 
                <?php if (!empty($about_us_bottom_content)) :?>
                    <div class="about-us-content-text">
                        <?php echo apply_filters('the_content', $about_us_bottom_content); ?>
                    </div>
                <?php endif; ?> 
            </div>
        </section>
    <?php
        }
    endwhile; ?>
<?php endif; ?>
