<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vmedspatx
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">  
		<div class="container">
			<?php
			the_content();
			?>
		</div>
	</div><!-- .entry-content -->
	<section class="home-section treaments_featured">
		<div class="container">
		<?php 
			if( have_rows('treaments_featured_in_items') ):
				echo '<h3 class="section-title text-center">'.esc_attr('TREATMENTS FEATURED IN').'</h3>';
				echo '<div class="treaments_featured_slider swiper-container"><div class="swiper-wrapper">';
				while( have_rows('treaments_featured_in_items') ) : the_row();
			
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
			endif;
		?>
		</div>
	</section>
	<section class="home-section our_services">
		<div class="container">
		<?php 
		if( have_rows('setup_our_services_item') ):
			$ourServicesCount = 0;
			echo '<div class="our_services__list">';
			while( have_rows('setup_our_services_item') ) : the_row();
				$ourServicesCount++;
				echo '<div class="our-services__item item-'.$ourServicesCount.'">';
				// Get parent value.
				$services_item_image = get_sub_field('services_item_image');
				$services_item_heading = get_sub_field('services_item_heading');
				$services_item_description = get_sub_field('services_item_description');
				$services_item_learn_more_link = get_sub_field('services_item_learn_more_link');
				?>
					<div class="our-services__item-wrap">
						<div class="item-image">
							<div class="item-image-wrap">
								<img class="" src="<?php echo esc_url($services_item_image['url']);?>" alt="<?php echo $services_item_heading;?>">
							</div>
						</div>
						<div class="item-text">
							<div class="item-text-wrap">
								<h2 class="item-heading">
									<?php echo $services_item_heading;?>
								</h2>
								<?php if(!empty($services_item_description)) {?> 
									<div class="item-description">
										<?php echo $services_item_description;?>
									</div>
								<?php } ?>
								<?php if(!empty($services_item_learn_more_link)) {?> 
									<div class="item-link">
										<a href="<?php echo $services_item_learn_more_link;?>" title="<?php echo $services_item_heading;?>">
											<?php echo esc_attr('LEARN MORE');?>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
				
				echo '</div>';
			endwhile;
			echo '</div>';
		endif;
		?>
		</div>
	</section>
	<section class="home-section explore_our_treatments">
		<div class="container">
			<h2 class="section-title text-center">Explore our Treatments</h2>
		</div>
	</section>
	<section class="home-section our_testimonials">
		<div class="container">
			<h2 class="section-title text-center">Testimonials</h2>
		</div>
	</section>
	<section class="home-section about_us">
		<div class="container">
			<h2 class="section-title text-center">ABOUT US</h2>
		</div>
	</section>
	<section class="home-section in_the_press">
		<div class="container">
			<h3 class="section-title text-center">In the press</h3>
		</div>
	</section>
	<section class="home-section blog_post">
		<div class="container">
			<h2 class="section-title text-center">Blog Posts</h2>
		</div>
	</section>
	<section class="home-section instagram_feed">
		<div class="container">
			<h2 class="section-title text-center">instagram</h2>
		</div>
	</section>
	<section class="home-section our_location">
		<div class="container">
			<h2 class="section-title text-center">OUR LOCATIONS</h2>
		</div>
	</section>
	<section class="home-section contact_us">
		<div class="container">
			<h2 class="section-title text-center">CONTACT US</h2>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
