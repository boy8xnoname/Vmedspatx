<?php
	global $post;

	if ( get_field('parent_service_page', $post->ID ) ) {
		$parent = get_field('parent_service_page', $post->ID );
	} else {
		$parent = $post->ID;
	}
	if( have_rows('treaments_featured_in_items', $parent) ):
?>
<section class="home-section treaments_featured">
	<div class="container">
	<?php
        echo '<h3 class="section-title text-center">'.esc_attr('TREATMENTS FEATURED IN').'</h3>';
        echo '<div class="treaments_featured_slider swiper-container"><div class="swiper-wrapper">';
        while( have_rows('treaments_featured_in_items', $parent) ) : the_row();

            // Get parent value.
            $treaments_featured_item_image = get_sub_field('treaments_featured_logo');
            $treaments_featured_item_link = get_sub_field('treaments_featured_link');
            if (!empty($treaments_featured_item_link)) {
                $link_start = '<a href="' . $treaments_featured_item_link . '" target="_blank">';
                $link_end   = '</a>';
            }

            ?>
            <div class="swiper-slide">
                <?php if (!empty($treaments_featured_item_link)) {echo  $link_start;} ?>
                    <img class="" src="<?php echo esc_url($treaments_featured_item_image['url']);?>" alt="Image Slider">
                <?php if (!empty($treaments_featured_item_link)) {echo  $link_end;} ?>
            </div>
            <?php
        endwhile;
        echo '</div></div>';
	?>
	</div>
</section>
<?php endif; ?>