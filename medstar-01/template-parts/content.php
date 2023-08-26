<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
if (empty($featured_img_url )) {
	$featured_img_url  = get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
} 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
		<div class="container">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

		?>
		</div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="container">
			<div class="d-flex flex-column flex-md-row gap-5">
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
					if(!empty(get_theme_mod('sidebar_contact_form_short_code'))) {
						$formContactShortcode = get_theme_mod('sidebar_contact_form_short_code');
					}
					// Get contact form description
					if(!empty(get_theme_mod('sidebar_contact_us_form_description'))) {
						$formContactDescription = get_theme_mod('sidebar_contact_us_form_description');
					}
				?>
				
				<div class="single-blog-main <?php if(!empty($formContactShortcode)) echo 'with-sidebar' ?>">
					<?php medstar01_post_thumbnail(); ?>
					<?php
						the_content();
					?>
				</div>
				
				
				<?php if(!empty($formContactShortcode)) : ?>
					<div class="single-blog-sidebar">
						<div class="form-contact-us">
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
									<small><?php echo apply_filters('the_content', $formContactDescription); ?></small>
								</div>
							<?php }?>
						</div>
					</div>
				<?php endif; ?>

				</div>
			</div>
		</div><!-- .entry-content -->
	</div>
	
	<footer class="entry-footer">
		<div class="container">
			<?php // medstar01_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
