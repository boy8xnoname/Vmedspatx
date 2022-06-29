<?php 
	$contactusStyle = get_field('contact_us_styles');
	$contactImageBackground = !empty(get_field('contact_section_image_background')) ? get_field('contact_section_image_background') : '';
	$contactImageContent = get_field('contact_section_image');

	if(!empty($contactImageBackground)) {
		$sectionContactBackground = $contactImageBackground['url'];
	} else {
		$sectionContactBackground = '';
	}

	if(!empty($contactImageContent)) {	
		$contactImageContent = $contactImageContent['url'];
	}
	$sectionContactTitle = !empty(get_field('contact_us_title')) ? get_field('contact_us_title') : '';
	$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : '';
	$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
	$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
?>
<?php if(!empty($formContactShortcode)) : ?>

<section id="section-contact_us" class="home-section contact_us <?php echo $contactusStyle;?>" <?php if($contactusStyle == 'contact_us_style_1') { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
	<div class="container">
		<?php if($contactusStyle == 'contact_us_style_1') { ?>
			<h2 class="section-title text-center">
				<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
			</h2>
		<?php } ?>
		
		<div class="row">
			<!-- Style Contact Us Version 1 -->
			<?php 
			if($contactusStyle == 'contact_us_style_1') { ?>
				<div class="d-none d-lg-block col col-md-1 col col-lg-3">
				</div>
				<div class="col col-12 col-md-10 col-lg-6">
					<?php  if(!empty($formContactShortcode)) { ?>
						<h2 class="contact-form-title text-center">
							<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
						</h2>
						<?php
						 echo do_shortcode($formContactShortcode); ?>
						<?php  if(!empty($formContactDescription)) { ?>
							<div class="contact-us-description text-center">
								<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
							</div>
						<?php }?>
					<?php }?>
				</div>
				<div class="d-none d-lg-block  col col-md-1 col-lg-3">
				</div>
			<?php } ?>
			<?php if($contactusStyle == 'contact_us_style_2') { ?>
				<!-- Style Contact Us Version 2 -->
				<div class="d-none d-lg-block col col-md-1 col col-lg-3">
				</div>
				<div class="col col-12 col-md-10 col-lg-6 form-contact-us" <?php if(!empty($sectionContactBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
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
				<div class="d-none d-lg-block  col col-md-1 col-lg-3">
				</div>
			<?php } ?>
			<?php if($contactusStyle == 'contact_us_style_3') { ?>
				<!-- Style Contact Us Version 3 -->
				<div class="contact_image_content d-flex align-items-center col col-12 col-md-6 ">
					<img src="<?php echo $contactImageContent;?>" alt="<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>">
				</div>
			
				<div class="contact_image_form col col-12 col-md-6" style ="background-image: url(<?php echo $sectionContactBackground;?>)" >
					<h2 class="section-title text-center">
						<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
					</h2>
					<?php  if(!empty($formContactShortcode)) { ?>
						<h2 class="contact-form-title text-center">
							<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
						</h2>
						<?php echo do_shortcode($formContactShortcode); ?>
						<?php  if(!empty($formContactDescription)) { ?>
							<div class="contact-us-description text-center">
								<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
							</div>
						<?php }?>
					<?php }?>
				</div>
			<?php } ?>
		</div>
	
	</div>
</section>
<?php endif; ?>