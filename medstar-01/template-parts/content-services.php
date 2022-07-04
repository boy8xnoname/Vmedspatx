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
// Get service banner fields data for desktop

$serviceBannerVideoMp4 = !empty( get_field('service_banner_video_mp4')) ?  get_field('service_banner_video_mp4') : '';
$serviceBannerVideoWebm = !empty( get_field('service_banner_video_webm')) ?  get_field('service_banner_video_webm') : '';
$serviceBannerVideoOgv = !empty( get_field('service_banner_video_ogv')) ?  get_field('service_banner_video_ogv') : '';
$serviceBannerVideoUrl = !empty( get_field('service_banner_video_url')) ?  get_field('service_banner_video_url') : '';
$serviceBannerImage = !empty( get_field('service_banner_image')) ?  get_field('service_banner_image') : '';

// Get service banner fields data for Mobile
$mobileServiceBannerVideoMp4 = !empty( get_field('mobile_service_banner_video_mp4')) ?  get_field('mobile_service_banner_video_mp4') : '';
$mobileServiceBannerVideoWebm = !empty( get_field('mobile_service_banner_video_webm')) ?  get_field('mobile_service_banner_video_webm') : '';
$mobileServiceBannerVideoOgv = !empty( get_field('mobile_service_banner_video_ogv')) ?  get_field('mobile_service_banner_video_ogv') : '';
$mobileServiceBannerVideoUrl = !empty( get_field('mobile_service_banner_video_url')) ?  get_field('mobile_service_banner_video_url') : '';
$mobileServiceBannerImage = !empty( get_field('mobile_service_banner_image')) ?  get_field('mobile_service_banner_image') : '';

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
		} ?> 

	<?php } else { ?> 
		<header class="entry-header header-jarallax" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</header><!-- .entry-header -->
		
	<?php } ?>


    <?php get_template_part( 'template-parts/services/content-treaments_featured' ); ?>

	<div class="entry-content service-entry-content">
		<div class="container-fluid">
			<div class="d-flex flex-column flex-md-row-reverse">
				
				<?php 
						$contactSidebarImageBackground = get_field('contact_sidebar_image_background');

						if(!empty($contactSidebarImageBackground)) {
							$contactSidebarImageBackground = $contactSidebarImageBackground['url'];
						}
					// Get contact form image logo
					if(!empty(get_field('sidebar_contact_form_logo_image'))) {
						$contact_form_logo_image = get_field('sidebar_contact_form_logo_image');
					} else {
						$contact_form_logo_image = get_field('contact_form_logo_image');
					}
					// Get contact form title
					if(!empty(get_field('sidebar_contact_us_before_form_title'))) {
						$formContactTitle = get_field('sidebar_contact_us_before_form_title');
					} else {
						$formContactTitle = !empty(get_field('contact_us_before_form_title')) ? get_field('contact_us_before_form_title') : 'Send us a message';

					}
					// Get contact form shortcode
					if(!empty(get_field('sidebar_contact_form_short_code'))) {
						$formContactShortcode = get_field('sidebar_contact_form_short_code');
					} else {
						$formContactShortcode = !empty(get_field('contact_form_short_code')) ? get_field('contact_form_short_code') : '';
					}
					// Get contact form description
					if(!empty(get_field('sidebar_contact_us_form_description'))) {
						$formContactDescription = get_field('sidebar_contact_us_form_description');
					} else {
						$formContactDescription = !empty(get_field('contact_us_form_description')) ? get_field('contact_us_form_description') : 'By submitting this form you agree to be contacted via phone/text/email.*';
					}
				?>
				<?php if(!empty($formContactShortcode)) : ?>
					<div id="service-contact-sidebar" class="service-contact-sidebar contact_us" >
						<div class="form-contact-us <?php if(!empty($contactImageBackground)) { echo'contact_with_bg'; }?>" <?php if(!empty($contactSidebarImageBackground)) { ?> style ="background-image: url(<?php echo $contactSidebarImageBackground;?>)" <?php } ?>>
							<?php  if(!empty($formContactShortcode)) { ?>
								<?php if(!empty($contact_form_logo_image)) { ?>
									<div class="text-center">
										<img src="<?php echo esc_url($contact_form_logo_image['url']);?>" alt="<?php echo esc_attr( $formContactTitle, 'medstar01' ); ?>"/>
									</div>
								<?php } ?>
								<h2 class="contact-form-title text-center">
									<?php echo apply_filters('the_content', $formContactTitle); ?>
								</h2>
								<?php echo do_shortcode($formContactShortcode); ?>
								<div class="contact-us-description text-center">
									<small><?php echo esc_attr( $formContactDescription, 'medstar01'); ?></small>
								</div>
							<?php }?>
						</div>
					</div>
				<?php endif; ?>
				<div class="service-main-content <?php if(!empty($formContactShortcode)) echo 'with-sidebar' ?>">
					<?php the_content(); ?>
				</div>
			</div>
			
		</div>
		<div class="container-fluid ">
			<?php 
				$services_before_after_setup = get_field('services_before_after_setup');
				if(!empty($services_before_after_setup)) {
					echo apply_filters('the_content',$services_before_after_setup );
				}
			?>
		</div>
	</div><!-- .entry-content -->

    <?php get_template_part( 'template-parts/services/content-faq' ); ?>

	<?php get_template_part( 'template-parts/services/content-contact' ); ?>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<div class="container">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'medstar01' ),
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
