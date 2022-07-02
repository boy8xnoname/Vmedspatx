<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medstar01
 */
$featured_img_url = '';
if (!wp_is_mobile()) {
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
} else {
	if(empty(get_post_meta(get_the_ID(), 'second_featured_image', true))) {
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	} else {
        $featured_img_url = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'full');
    }
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background-image: url('<?php echo esc_url($featured_img_url);?>');">
		<div class="container">
			<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<?php 
		$contact_us_phone_number = get_field('contact_us_phone_number');
		$contact_us_fax_number = get_field('contact_us_fax_number');
		$contact_us_location_address = get_field('contact_us_location_address');
		$contact_us_email_address = get_field('contact_us_email_address');
		if(!empty($contact_us_phone_number) || !empty($contact_us_fax_number) || !empty($contact_us_location_address) || !empty($contact_us_email_address)) {
	?>
	<div class="contact-us-information">
		<div class="container">
			<div class="contact-information-list">
				<?php if(!empty($contact_us_phone_number)) {?> 
				<div class="contact-information-item">
					<div class="item-box-icon">
                        <a href="tel:<?php echo clean_phone_link($contact_us_phone_number); ?>">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                    </div>
					<div class="item-box-content">
						<h3 class="information-title">
							<a href="tel:<?php echo clean_phone_link($contact_us_phone_number); ?>">
								<?php echo __('Phone','medstar01');?>
							</a >
						</h3>
						<div class="information-description">
							<a href="tel:<?php echo clean_phone_link($contact_us_phone_number); ?>">
								<?php echo $contact_us_phone_number;?>
							</a>
						</div>
					</div>
				</div>
				<?php } ?> 
				<?php if(!empty($contact_us_fax_number)) {?> 
				<div class="contact-information-item">
					<div class="item-box-icon">
                        <a href="tel:<?php echo clean_phone_link($contact_us_fax_number);?>">
                            <i class="fa fa-fax" aria-hidden="true"></i>
                        </a>
                    </div>
					<div class="item-box-content">
						<h3 class="information-title">
							<?php echo __('Fax','medstar01');?>
						</h3>
						<div class="information-description">
							<a href="tel:<?php echo clean_phone_link($contact_us_fax_number); ?>">
								<?php echo $contact_us_fax_number;?>
							</a>
						</div>
					</div>
				</div>
				<?php } ?> 
				<div class="contact-information-item">
					<div class="item-box-icon">
                        <a href="https://maps.google.com/?q=<?php echo $contact_us_location_address;?>">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </a>
                    </div>
					<div class="item-box-content">
						<h3 class="information-title">
                            <?php echo __('Location','medstar01');?>
						</h3>
						<div class="information-description">
							<?php echo $contact_us_location_address;?>
						</div>
					</div>
				</div>
				<div class="contact-information-item">
					<div class="item-box-icon">
                        <a href="mailto:<?php echo $contact_us_email_address;?>">
						    <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
					</div>
					<div class="item-box-content">
						<h3 class="information-title">
							<a href="mailto:<?php echo $contact_us_email_address;?>">
								<?php echo __('Email','medstar01');?>
							</a>
						</h3>
						<div class="information-description">
							<a href="mailto:<?php echo $contact_us_email_address;?>">
								<?php echo $contact_us_email_address;?>
							</a>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>


	
	
    <?php get_template_part( 'template-parts/contact-us/content-contact-us-style-2' ); ?>

	<?php 
		$disclaimer_text_content = get_field('disclaimer_text_content');
		if(!empty($disclaimer_text_content)) {
	?>				
	<div class="contact-us-disclaimer-text">
		<div class="disclaimer-text">
			<?php echo apply_filters('the_content', $disclaimer_text_content);?>
		</div>
	</div>
	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
