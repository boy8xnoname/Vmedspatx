<?php
/**
 * Template name: Contact Style 2 page template
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
		<div class="page-contact-wrap page-contact-style-2">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-contact-us-style-2' );


			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
