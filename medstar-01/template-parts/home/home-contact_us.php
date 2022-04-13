<?php 
	$contactImageBackground = get_field('contact_section_image_background');
	if(empty($contactImageBackground)) {
		$sectionContactBackground = get_template_directory_uri() . '/assets/images/Gold-Background.jpeg';
	} else {
		$sectionContactBackground = $contactImageBackground['url'];
	}

	$sectionContactTitle = !empty(get_field('contact_us_title')) ? get_field('contact_us_title') : 'CONTACT US';
	$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : 'Send us a message';
	$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
	$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
?>
<?php if(!empty($formContactShortcode)) : ?>
<section class="home-section contact_us" style ="background-image: url(<?php echo $sectionContactBackground;?>)">
	<div class="container">
	
		<h2 class="section-title text-center">
			<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
		</h2>
		<div class="row">
			<div class="d-none d-lg-block col col-md-1 col col-lg-3">
			</div>
			<div class="col col-12 col-md-10 col-lg-6">
				<?php  if(!empty($formContactShortcode)) { ?>
					<h2 class="contact-form-title text-center">
						<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
					</h2>
					<?php echo do_shortcode($formContactShortcode); ?>
					<div class="contact-us-description text-center">
						<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
					</div>
				<?php }?>
			</div>
			<div class="d-none d-lg-block  col col-md-1 col-lg-3">
			</div>
		</div>
	
	</div>
</section>
<?php endif; ?>