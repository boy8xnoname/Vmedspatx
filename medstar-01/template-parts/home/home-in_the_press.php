<?php
	global $post;
    if ( get_field('home_page_parent', $post->ID ) ) {
        $parent = get_field('home_page_parent', $post->ID );
    } else {
        $parent = $post->ID;
    }
	if( have_rows('in_the_press_logos', $parent) ):
?>
<section class="home-section in_the_press">
	<div class="container">
		<h3 class="section-title text-center">In the press</h3>
		
		<?php 
			
				echo '<div class="in_the_press_slider swiper-container"><div class="swiper-wrapper">';
				while( have_rows('in_the_press_logos', $parent) ) : the_row();
			
					// Get parent value.
					$in_the_press_logo = get_sub_field('in_the_press_logo');
					$in_the_press_link = get_sub_field(' in_the_press_link');
					if (!empty($in_the_press_link)) {
						$in_the_press_link_start = '<a href="' . $in_the_press_link . '" target="_blank">';
						$in_the_press_link_end   = '</a>';
					}
			
					?>
					<div class="swiper-slide">
						<?php if (!empty($in_the_press_link)) {echo  $in_the_press_link_start;} ?>
							<img class="" src="<?php echo esc_url($in_the_press_logo['url']);?>" alt="Image Slider">
						<?php if (!empty($in_the_press_link)) {echo  $in_the_press_link_end;} ?>
					</div>
					<?php
				endwhile;
				echo '</div></div>';
				
			
		?>
	</div>
</section>
<?php endif; ?>