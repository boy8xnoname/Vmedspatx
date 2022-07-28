<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

global $post;

$parents = get_post_ancestors( $post->ID );
if ( ! empty( $parents ) ) {
    $parent = array_pop( $parents );
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
        $featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
    }
}
if (empty($featured_img_url )) {
    $featured_img_url  = get_template_directory_uri() . '/assets/images/dummy_1920x930_ffffff_cccccc.png';
}
// Get service banner fields data for desktop

$serviceBannerVideoMp4 = !empty( get_field('service_banner_video_mp4', $parent)) ?  get_field('service_banner_video_mp4', $parent) : '';
$serviceBannerVideoWebm = !empty( get_field('service_banner_video_webm', $parent)) ?  get_field('service_banner_video_webm', $parent) : '';
$serviceBannerVideoOgv = !empty( get_field('service_banner_video_ogv', $parent)) ?  get_field('service_banner_video_ogv', $parent) : '';
$serviceBannerVideoUrl = !empty( get_field('service_banner_video_url', $parent)) ?  get_field('service_banner_video_url', $parent) : '';
$serviceBannerImage = !empty( get_field('service_banner_image', $parent)) ?  get_field('service_banner_image', $parent) : '';

// Get service banner fields data for Mobile
$mobileServiceBannerVideoMp4 = !empty( get_field('mobile_service_banner_video_mp4', $parent)) ?  get_field('mobile_service_banner_video_mp4', $parent) : '';
$mobileServiceBannerVideoWebm = !empty( get_field('mobile_service_banner_video_webm', $parent)) ?  get_field('mobile_service_banner_video_webm', $parent) : '';
$mobileServiceBannerVideoOgv = !empty( get_field('mobile_service_banner_video_ogv', $parent)) ?  get_field('mobile_service_banner_video_ogv', $parent) : '';
$mobileServiceBannerVideoUrl = !empty( get_field('mobile_service_banner_video_url', $parent)) ?  get_field('mobile_service_banner_video_url', $parent) : '';
$mobileServiceBannerImage = !empty( get_field('mobile_service_banner_image', $parent)) ?  get_field('mobile_service_banner_image', $parent) : '';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
        // check if admin ready config service banner content
        if(
            !empty($serviceBannerVideoMp4) ||
            !empty($serviceBannerVideoWebm) ||
            !empty($serviceBannerVideoOgv) ||
            !empty($serviceBannerVideoUrl) ||
            !empty($serviceBannerImage)
        ) {
            // check if admin ready config mobile service banner content
            if(
                !empty($mobileServiceBannerVideoMp4) ||
                !empty($mobileServiceBannerVideoWebm) ||
                !empty($mobileServiceBannerVideoOgv) ||
                !empty($mobileServiceBannerVideoUrl) ||
                !empty($mobileServiceBannerImage)
            ) {
                echo '<div class="d-block d-lg-none">';
                get_template_part('template-parts/services/content-banner-mobile');
                echo '</div>';
                echo '<div class="d-none d-lg-block">';
                get_template_part('template-parts/services/content-banner-desktop');
                echo '</div>';

            } else {
                get_template_part('template-parts/services/content-banner-desktop');
            }
    ?>
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
