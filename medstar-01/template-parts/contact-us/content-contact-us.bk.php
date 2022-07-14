	
	<?php 
		$contactImageBackground = get_field('contact_section_image_background');

		if(!empty($contactImageBackground)) {
			$sectionContactBackground = $contactImageBackground['url'];
		}
		$sectionContactTitle = !empty(get_field('contact_us_title')) ? strip_tags(get_field('contact_us_title'), '<br><span><img>') : 'CONTACT US';
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