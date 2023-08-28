<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

get_header();
?>
	<div class="container blog-container">
		<div class="row">
			<div class="col-md-8">
				<main id="primary" class="site-main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation(['screen_reader_text' => ' ']);

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
			</div>
			<div class="col-md-4">
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
                            <small><?php echo $formContactDescription; ?></small>
                        </div>
					<?php }?>
                </div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
