<?php 
	$contactImageBackground = get_field('contact_section_image_background');

	if(!empty($contactImageBackground)) {
		$sectionContactBackground = $contactImageBackground['url'];
	}
	$contact_form_logo_image = get_field('contact_form_logo_image');
	$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : 'Send us a message';
	$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
	$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
	$contentDescriptionBottomForm = get_field('content_description_bottom_form');
?>
<?php if(!empty($formContactShortcode)) : ?>
<section class="service-contact-section contact_us ">
	<div class="container">
		
		<div class="row">
			<div class="d-none d-lg-block col col-md-1 col col-lg-2">
			</div>
			<div class="form-contact-us col col-12 col-md-10 col-lg-8 <?php if(!empty($contactImageBackground)) { echo'contact_with_bg'; }?>"  <?php if(!empty($contactImageBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
				<?php  if(!empty($formContactShortcode)) { ?>
					<?php if(!empty($contact_form_logo_image)) { ?>
						<div class="text-center">
						<img src="<?php echo esc_url($contact_form_logo_image['url']);?>" alt="<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>"/>
						</div>
					<?php } ?>
					<h2 class="contact-form-title text-center">
						<?php echo apply_filters('the_content', $formContactTitle); ?>
					</h2>
					<?php echo do_shortcode($formContactShortcode); ?>
					<div class="contact-us-description text-center">
						<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
					</div>
				<?php }?>
			</div>
			<div class="d-none d-lg-block  col col-md-1 col-lg-2">
			</div>
		</div>
	</div>

	<?php if(!empty($contentDescriptionBottomForm)) : ?>
		<div class="container-fluid">
			<div class="content-bottom-form">
				<?php echo apply_filters('the_content', $contentDescriptionBottomForm);?>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php endif; ?>