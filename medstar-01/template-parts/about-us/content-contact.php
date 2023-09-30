<?php
    global $post;
    if ( get_field('parent_about_page', $post->ID ) ) {
        $parent = get_field('parent_about_page', $post->ID );
    } else {
        $parent = $post->ID;
    }
	$contactusStyle = get_field('contact_us_styles', $parent);
	$contactImageBackground = get_field('contact_section_image_background', $parent);
	$contactImageContent = get_field('contact_section_image', $parent);

	if(!empty($contactImageBackground)) {
		$sectionContactBackground = $contactImageBackground['url'];
	}
	
	if(!empty($contactImageContent)) {
	
		$contactImageContent = $contactImageContent['url'];
	}

	$sectionContactTitle = !empty(get_field('contact_us_title', $parent)) ? strip_tags(get_field('contact_us_title', $parent), '<br><span><img>') : '';
    $sectionContactSubTitle = !empty(get_field('contact_us_sub_title', $parent)) ? strip_tags(get_field('contact_us_sub_title', $parent), '<br><span><img>') : '';
	$formContactTitle = !empty(get_field('contact_us_before_form_title', $parent)) ? get_field('contact_us_before_form_title', $parent) : '';
	$formContactShortcode = !empty(get_field('contact_form_short_code', $parent)) ? get_field('contact_form_short_code', $parent) : '';
	$formContactDescription = !empty(get_field('contact_us_form_description', $parent)) ? get_field('contact_us_form_description', $parent) : '';
?>
<?php if(!empty($formContactShortcode)) : ?>
<section  class="home-section contact_us <?php echo $contactusStyle;?>" <?php if($contactusStyle == 'contact_us_style_1') { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
	<div class="<?php if(($contactusStyle == 'contact_us_style_1') || $contactusStyle == 'contact_us_style_3') { echo 'container'; } else {echo 'container-fluid';}?> ">
		<?php if($contactusStyle == 'contact_us_style_1') { ?>
		<h2 class="section-title text-center">
			<?php echo esc_attr( $sectionContactTitle, 'medstar01' ) ?>
		</h2>
        <h3 class="section-sub-title text-center">
			<?php echo esc_attr( $sectionContactSubTitle, 'medstar01' ) ?>
		</h3>
		<?php } ?>
		<div class="row">
			<!-- Style Contact Us Version 1 -->
			<?php 
			if($contactusStyle == 'contact_us_style_1') { ?>
				<div class="d-none d-lg-block col col-md-1 col col-lg-3">
				</div>
				<div class="col col-12 col-md-12 col-lg-6">
					<?php  if(!empty($formContactShortcode)) { ?>
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
			<?php if($contactusStyle == 'contact_us_style_2') { ?>
				<!-- Style Contact Us Version 2 -->
				<div class="d-none d-sm-block d-lg-block col col-md-1 col col-lg-3">
				</div>
				<div class="col col-12 col-md-10 col-lg-6 form-contact-us" <?php if(!empty($sectionContactBackground)) { ?> style ="background-image: url(<?php echo $sectionContactBackground;?>)" <?php } ?>>
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
				<div class="d-none d-sm-block d-lg-block col col-md-1 col-lg-3">
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
                    <h3 class="section-sub-title text-center">
                        <?php echo esc_attr( $sectionContactSubTitle, 'medstar01' ) ?>
                    </h3>
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

		<div class="wp-clearfix" style="height: 30px;"></div>

        <div class="row">
            <div class="col col-12 text-center footer-disclaimer-text">
                 <?php
                    $footerDescription = get_theme_mod('footer_description_text');
                    if(!empty( $footerDescription)) {
                        echo nl2br(get_theme_mod('footer_description_text'));
                    }
                ?>
            </div>
        </div>
	
	</div>
</section>
<?php endif; ?>