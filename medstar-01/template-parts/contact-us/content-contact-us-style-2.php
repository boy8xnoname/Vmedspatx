<?php 
	$contactImageBackground = !empty(get_field('contact_section_image_background')) ? get_field('contact_section_image_background') : '';
	$contactImageContent = !empty(get_field('contact_section_image')) ? get_field('contact_section_image') : '';

	if(!empty($contactImageBackground)) {
		$sectionContactBackground = $contactImageBackground['url'];
	} else {
		$sectionContactBackground = '';
	}

	if(!empty($contactImageContent)) {	
		$contactImageContent = $contactImageContent['url'];
	}
	$sectionContactTitle = !empty(get_field('contact_us_title')) ? strip_tags(get_field('contact_us_title'), '<br><span><img>') : '';
	$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : '';
	$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
	$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';

	$location_google_map = !empty(get_field('google_map_content_setup')) ? get_field('google_map_content_setup') : '';
?>
<?php if(!empty($formContactShortcode)) : ?>

<section id="section-contact_us" class="contact_us_and_map ">
	<div class="container">
		<div class="row">
		
			<div class="contact_form col col-12 col-md-6 form-contact-us" <?php if(!empty($sectionContactBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
				<div class="contact_form_wrapper">
				<?php  if(!empty($formContactShortcode)) { ?>
					<?php  if(!empty($sectionContactTitle)) { ?>
						<h2 class="section-title text-center">
							<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
						</h2>
					<?php }?>
					<?php  if(!empty($formContactTitle)) { ?>
						<h2 class="contact-form-title text-center">
							<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
						</h2>
					<?php }?>
					<?php echo do_shortcode($formContactShortcode); ?>
					<?php  if(!empty($formContactDescription)) { ?>
						<div class="contact-us-description text-center">
							<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
						</div>
					<?php }?>
				<?php }?>
				</div>
			</div>
			<div class="contact_map col col-md-1 col-md-6">
				<?php 
				if( $location_google_map ): ?>
					<div class="acf-map" data-zoom="16">
						<div class="marker" data-lat="<?php echo __($location_google_map['lat']); ?>" data-lng="<?php echo __($location_google_map['lng']); ?>"></div>
					</div>
				<?php endif; ?>
			</div>
			
		</div>
	
	</div>
</section>
<?php endif; ?>