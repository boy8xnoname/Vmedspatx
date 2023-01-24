<?php

    global $post;

    if ( get_field('parent_contact_page', $post->ID ) ) {
        $parent = get_field('parent_contact_page', $post->ID );
    } else {
        $parent = $post->ID;
    }

	$contactImageBackground = !empty(get_field('contact_section_image_background', $parent)) ? get_field('contact_section_image_background', $parent) : '';
	$contactImageContent = !empty(get_field('contact_section_image', $parent)) ? get_field('contact_section_image', $parent) : '';

	if(!empty($contactImageBackground)) {
		$sectionContactBackground = $contactImageBackground['url'];
	} else {
		$sectionContactBackground = '';
	}

	$sectionContactTitle = !empty(get_field('contact_us_title', $parent)) ? strip_tags(get_field('contact_us_title', $parent), '<br><span><img>') : '';
    $sectionContactSubTitle = !empty(get_field('contact_us_sub_title', $parent)) ? strip_tags(get_field('contact_us_sub_title', $parent), '<br><span><img>') : '';
	$formContactTitle = !empty(get_field('contact_us_before_form_title', $parent)) ? get_field('contact_us_before_form_title', $parent) : '';
	$formContactShortcode = !empty(get_field('contact_form_short_code', $parent)) ? get_field('contact_form_short_code', $parent) : '';
	$formContactDescription = !empty(get_field('contact_us_form_description', $parent)) ? get_field('contact_us_form_description', $parent) : 'By submitting this form you agree to be contacted via phone/text/email.*';

	$location_google_map = !empty(get_field('google_map_content_setup', $parent)) ? get_field('google_map_content_setup', $parent) : '';
?>
<?php if(!empty($formContactShortcode)) : ?>

<section id="section-contact_us" class="contact_us_and_map ">
	<div class="container">
		<div class="row">
            <?php if(!get_field('parent_contact_page', $post->ID )): ?>
			<div class="contact_form col col-12 col-md-6 form-contact-us" <?php if(!empty($sectionContactBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
				<div class="contact_form_wrapper">
				<?php  if(!empty($formContactShortcode)) { ?>
					<?php  if(!empty($sectionContactTitle)) { ?>
						<h2 class="section-title text-center">
							<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
						</h2>
					<?php }?>
                    <?php  if(!empty($sectionContactSubTitle)) { ?>
                        <h3 class="section-sub-title text-center">
                            <?php echo esc_attr( $sectionContactSubTitle, 'medstar01' ) ?>
                        </h3>
                    <?php }?>
					<?php  if(!empty($formContactTitle)) { ?>
						<h4 class="contact-form-description text-center">
							<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
						</h4>
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
			<?php endif; ?>
            <div class="contact_map col col-md-1 <?php echo get_field('parent_contact_page', $post->ID ) ? 'col-md-12' : 'col-md-6'; ?>">
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