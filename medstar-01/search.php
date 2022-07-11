<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package medstar01
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="new-search">
			<div class="row">
				<div class="d-none d-lg-block col col-md-1 col col-lg-3">
				</div>
				<div class="col col-12 col-md-10 col-lg-6">
					<h3 class="new-search-title text-center"><?php echo esc_attr( 'New search' );?></h3>
					<p class="text-center"><?php echo esc_attr( 'If you are not happy with the below results, you may try another search.');?></p>
					<?php get_search_form(); ?>
				</div>
				<div class="d-none d-lg-block col col-md-1 col col-lg-3">
				</div>
			</div>
		</div>
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'medstar01' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
					<p><?php echo esc_attr( 'We have found some results with the word you searched.');?></p>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				// the_posts_navigation();
				medstar_01_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
