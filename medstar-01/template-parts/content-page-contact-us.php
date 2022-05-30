<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
		<div class="container">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="container">
			<?php the_content();?>
		</div>
	</div><!-- .entry-content -->

	<?php
		$our_location_title = get_field('our_location_title');
		$our_locations_list = get_field('our_locations_list');
		$our_location_map = have_rows('our_location_map');
		if(!empty($our_locations_list) || !empty($our_location_map)):
	?>
	<section class="home-section our_location">
		<div class="container">
			<?php if(!empty($our_location_title)) {
				echo '<h2 class="section-title text-center">'.esc_attr($our_location_title).'</h2>';
			} ?>
			<div class="row d-flex justify-content-center">
				<div class="col col-12 col-md-6">
					<?php
					if( $our_locations_list ) {
						echo '<ul class="location-list">';
						foreach( $our_locations_list as $our_locations_item ) {
							$our_location_title = $our_locations_item['our_location_title'];
							$our_location_phone_number = $our_locations_item['our_location_phone_number'];
							$our_location_address = $our_locations_item['our_location_address'];
							$our_location_address_map_url = $our_locations_item['our_location_address_map_url'];
							if (!empty($our_location_phone_number)) {
								$location_phone_link_start = '<a href="tel:' . $our_location_phone_number . '" target="_blank">';
								$location_phone_link_end   = '</a>';
							}
							if (!empty($our_location_address_map_url)) {
								$location_link_start = '<a href="' . $our_location_address_map_url . '" target="_blank">';
								$location_link_end   = '</a>';
							}
							if (!empty($our_location_title)) {
								echo '<li class="location-item">';
								echo '<h2 class="location-title">'.	$our_location_title .'</h2>';
								if (!empty($our_location_phone_number)) {
									echo '<p class="location-phone">'.$location_phone_link_start. $our_location_phone_number .$location_phone_link_end.'</p>';
								}
								if (!empty($our_location_address)) {
									if (!empty($our_location_address_map_url)) {
										echo '<p class="location-address">'.$location_link_start.	$our_location_address .$location_link_end .'</p>';
									} else {
										echo '<p class="location-address">'.$our_location_address .'</p>';
									}
									
								}
								echo '</li>';
							}
						}
						echo '</ul>';
					}
					?>		 	
				</div>
				<div class="col col-12 col-md-6 d-flex align-items-center">
				<?php
					if( $our_location_map ) {
						echo '<div class="map-pins">';
						while( have_rows('our_location_map') ): the_row(); 
						$our_location_map_image =  get_sub_field('our_location_map_image');
						$our_location_map_pins =  get_sub_field('our_location_map_pins');
						if ($our_location_map_image) {
							echo '<img class="" src="'. esc_url($our_location_map_image['url']).'" alt="Our Location Map Image">';
							if ($our_location_map_pins) {
								$pin_item_count = 0;
								foreach( $our_location_map_pins as $our_location_map_pin_item ) {
									$pin_item_count++;
									$map_pin_label = $our_location_map_pin_item['map_pin_label'];
									$map_pin_url = $our_location_map_pin_item['map_pin_url'];
									if (!empty($map_pin_url)) {
										$map_pin_url_start = '<a href="' . $map_pin_url . '" target="_blank">';
										$map_pin_url_end   = '</a>';
									}
									echo '<div class="map-pin-item map-pin-item-'.$pin_item_count.'">
											<div class=" marker">
											<div class="pin"></div>
											<div class="pin-effect"></div>
											</div>';
										if (!empty($map_pin_url)) { echo $map_pin_url_start;}
											echo $map_pin_label;
										if (!empty($map_pin_url)) {echo $map_pin_url_end;}
									echo '</div>';
								}
							}
						}
						endwhile;
						echo '</div>';
					}?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
		
	<?php 
		$contactImageBackground = get_field('contact_section_image_background');

		if(!empty($contactImageBackground)) {
			$sectionContactBackground = $contactImageBackground['url'];
		}
		$sectionContactTitle = !empty(get_field('contact_us_title')) ? get_field('contact_us_title') : 'CONTACT US';
		$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : '';
		$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
		$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
	?>
	<?php  if(!empty($formContactShortcode)) :?>
	<section class="page-section contact_us " >
		<div class="container">		
			<div class="row">
				<div class="d-none d-lg-block  col col-lg-3">
				</div>
				<div class="form-content-wrap col col-12 col-lg-6 <?php if(!empty($contactImageBackground)) { echo'contact_with_bg'; }?>" <?php if(!empty($contactImageBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
					<h2 class="section-title text-center">
						<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
					</h2>
						<h2 class="contact-form-title text-center">
							<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
						</h2>
						<?php echo do_shortcode($formContactShortcode); ?>
						<div class="contact-us-description text-center">
							<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
						</div>
				</div>
				<div class="d-none d-lg-block  col col-lg-3">
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
