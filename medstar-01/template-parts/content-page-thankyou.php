<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
$featured_img_url = '';
if (!wp_is_mobile()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
} else {
	if(empty(get_post_meta(get_the_ID(), 'second_featured_image', true))) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {
        $featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
    }
}
if (empty($featured_img_url )) {
	$featured_img_url  = get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
} 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
		<div class="container">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->


	<div class="entry-content thankyou-content">
		<div class="container">
			<div class="row">
				<div class="d-none d-lg-block  col col-lg-2">
				</div>
				<div class="thankyou-content-wrap col col-12 col-lg-8">
					<?php the_content();?>
				</div>
				<div class="d-none d-lg-block  col col-lg-2">
				</div>
			</div>
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
								$location_phone_link_start = '<a href="tel:' . clean_phone_link($our_location_phone_number) . '" target="_blank">';
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
</article><!-- #post-<?php the_ID(); ?> -->
