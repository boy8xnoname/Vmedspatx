<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vmedspatx
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

	<section class="page-section contact_us">
		<div class="container">
			<?php 
				$sectionContactTitle = !empty(get_field('contact_us_title')) ? get_field('contact_us_title') : 'CONTACT US';
				$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : 'Send us a message';
				$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
				$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
			?>
			<h2 class="section-title text-center">
				<?php echo esc_attr( $sectionContactTitle, 'vmedspatx' ) ?>
			</h2>
			<div class="row">
				<div class="col col-lg-3">
				</div>
				<div class="col col-lg-6">
					<?php  if(!empty($formContactShortcode)) { ?>
						<h2 class="contact-form-title text-center">
							<?php echo esc_attr( $formContactTitle, 'vmedspatx' ); ?>
						</h2>
						<?php echo do_shortcode($formContactShortcode); ?>
						<div class="contact-us-description text-center">
							<small><?php echo esc_attr( $formContactDescription, 'vmedspatx'); ?></small>
						</div>
					<?php }?>
				</div>
				<div class="col col-lg-3">
				</div>
			</div>
		
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
