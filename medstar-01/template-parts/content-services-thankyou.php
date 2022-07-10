<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
$featured_img_url = '';
$detect = new Mobile_Detect;
if (!wp_is_mobile()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
} else {
	if(empty(get_post_meta(get_the_ID(), 'second_featured_image', true))) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {
        $featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
    }
}
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

</article><!-- #post-<?php the_ID(); ?> -->
