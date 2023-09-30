<?php
global $post;
if ( get_field('parent_about_page', $post->ID ) ) {
	$parent = get_field('parent_about_page', $post->ID );
} else {
	$parent = $post->ID;
}
if( have_rows('our_leadership', $parent) ): ?>
<section class="about-us-content about-us-leadership">
    <div class="container">
        <h2 class="section-title text-center"><?php echo strip_tags(get_field('our_leadership_title'), '<br><span><img>'); ?></h2>
        <div class="leadership-list">
        <?php while( have_rows('our_leadership', $parent) ): the_row();
            $member_image = get_sub_field('member_image');
            $right_column = empty($member_image) ? 12 : 9;
            ?>
            <div class="leadership-item">
                <div class="row">
                    <?php if(!empty( $member_image)) { ?>
                    <div class="col col-12 col-md-3 col-xl-3">
                        <?php echo '<img src="'.esc_url($member_image['url']).'">' ; ?>
                    </div>
                    <?php } ?>
                    <div class="col col-12 col-md-<?php echo $right_column; ?> col-xl-<?php echo $right_column; ?> d-flex flex-column align-items-flex-start justify-content-center">
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