<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

global $post;

if ( get_field('parent_service_page', $post->ID ) ) {
	$parent = get_field('parent_service_page', $post->ID );
} else {
	$parent = $post->ID;
}

$featured_img_url = '';
$detect = new Mobile_Detect;
if (!wp_is_mobile()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
} else {
	if(empty(get_post_meta(get_the_ID(), 'second_featured_image', true))) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {
		// Any tablet device.
		if(!$detect->isTablet() ){
			// Image for mobile banner will here
			$featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
		} else {
			if(empty(get_post_meta(get_the_ID(), 'third_featured_image', true))) {
				$featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
			} else {
				$featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'third_featured_image', true), 'full');
			}
		}
    }
} 
if (empty($featured_img_url )) {
	$featured_img_url  = get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
} 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->

    <?php get_template_part( 'template-parts/about-us/content-top' ); ?>
    <?php get_template_part( 'template-parts/about-us/content-our-leadership' ); ?>
    <?php get_template_part( 'template-parts/about-us/content-bottom' ); ?>
    <?php get_template_part( 'template-parts/about-us/content-contact' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->
