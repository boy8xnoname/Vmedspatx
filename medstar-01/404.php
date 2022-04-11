<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package medstar01
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header text-left">
					<div class="page-404-number"><?php esc_html_e( '404', 'medstar01' ); ?></div>
					<h1 class="page-title"><?php esc_html_e( 'Whoops, no result found!.', 'medstar01' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content  text-left">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Try a new search?', 'medstar01' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
