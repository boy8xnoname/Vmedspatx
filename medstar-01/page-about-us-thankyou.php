<?php
/**
 * Template name: About Us Thank You page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

get_header();
?>

	<main id="primary" class="site-main box-1200-site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'about-thankyou' );

		
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
