<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */

global $post;

$parent = $post->ID;

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
        // check if admin ready config mobile service banner content
        if(
            !empty($mobileServiceBannerVideoMp4) ||
            !empty($mobileServiceBannerVideoWebm) ||
            !empty($mobileServiceBannerVideoOgv) ||
            !empty($mobileServiceBannerVideoUrl) ||
            !empty($mobileServiceBannerImage)
        ) {
            echo '<div class="d-block d-lg-none">';
            get_template_part('template-parts/home/ty-banner-mobile');
            echo '</div>';
            echo '<div class="d-none d-lg-block">';
            get_template_part('template-parts/home/ty-banner-desktop');
            echo '</div>';

        } else {
            get_template_part('template-parts/home/ty-banner-desktop');
        }
	?>

	<?php get_template_part( 'template-parts/home/home-treaments_featured' ); ?>

	<?php get_template_part( 'template-parts/home/home-our_services' ); ?>

	<?php get_template_part( 'template-parts/home/home-explore_our_treatments' ); ?>

	<?php  get_template_part( 'template-parts/home/home-about_us' ); ?>

	<?php get_template_part( 'template-parts/home/home-our_testimonials' ); ?>

	<?php // get_template_part( 'template-parts/home/home-about_us' ); ?>

	<?php get_template_part( 'template-parts/home/home-in_the_press' ); ?>

	<?php get_template_part( 'template-parts/home/home-book_your_next_appointment' ); ?>

	<?php get_template_part( 'template-parts/home/home-blog_post' ); ?>

	<?php get_template_part( 'template-parts/home/home-instagram_feed' ); ?>

	<?php //get_template_part( 'template-parts/home/home-our_location' ); ?>

	<?php //get_template_part( 'template-parts/home/home-contact_us' ); ?>


</article><!-- #post-<?php the_ID(); ?> -->
