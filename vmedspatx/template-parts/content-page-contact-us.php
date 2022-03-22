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
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<?php // vmedspatx_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="container">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vmedspatx' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
