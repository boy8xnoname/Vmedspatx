<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vmedspatx
 */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
if (empty($featured_img_url )) {
	$featured_img_url  = get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
} 
$service_banner_image = !empty( get_field('service_banner_image')) ?  get_field('service_banner_image') : '';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(!empty($service_banner_image )) {?> 
		<?php get_template_part( 'template-parts/services/content-banner' ); ?>
	<?php } else { ?> 
		<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</header><!-- .entry-header -->
		
	<?php } ?>


    <?php get_template_part( 'template-parts/services/content-treaments_featured' ); ?>

	<div class="entry-content service-entry-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<div class="container">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'vmedspatx' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
			</div>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
