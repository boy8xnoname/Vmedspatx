<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medstar01
 */

get_header();
?>

	<main id="primary" class="site-main single_site-main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<?php 
			// Get contact form image logo
			if(!empty(get_theme_mod('sidebar_contact_form_logo_image'))) {
				$contact_form_logo_image = get_theme_mod('sidebar_contact_form_logo_image');
			}
			// Get contact form title
			if(!empty(get_theme_mod('sidebar_contact_us_before_form_title'))) {
				$formContactTitle = get_theme_mod('sidebar_contact_us_before_form_title');
			}
			// Get contact form shortcode
			if(!empty(get_theme_mod('sidebar_contact_form_short_code_bottom'))) {
				$formContactShortcode = get_theme_mod('sidebar_contact_form_short_code_bottom');
			} 
			// Get contact form description
			if(!empty(get_theme_mod('sidebar_contact_us_form_description'))) {
				$formContactDescription = get_theme_mod('sidebar_contact_us_form_description');
			}
			
		?>
		<?php if(!empty($formContactShortcode)) : ?>
		<section class="service-contact-section contact_us">
			<div class="container">
			
				<div class="row">
					<div class="d-none d-lg-block col col-md-1 col col-lg-2">
					</div>
					<div class="form-contact-us col col-12 col-md-10 col-lg-8">
						<?php  if(!empty($formContactShortcode)) { ?>
							<?php if(!empty($contact_form_logo_image)) { ?>
								<div class="text-center">
								<img src="<?php echo esc_url($contact_form_logo_image);?>" alt="<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>"/>
								</div>
							<?php } ?>
							<h2 class="contact-form-title text-center">
								<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>
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

	</main><!-- #main -->

<?php
get_footer();
