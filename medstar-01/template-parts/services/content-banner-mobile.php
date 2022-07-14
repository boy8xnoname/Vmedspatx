<?php 
$detect = new Mobile_Detect;

// get service page banner image
$select_banner_videoimage_banner =  get_field('mobile_select_banner_videoimage_banner');
$service_banner_video_mp4 = get_field('mobile_service_banner_video_mp4');
$service_banner_video_webm =  get_field('mobile_service_banner_video_webm');
$service_banner_video_ogv =  get_field('mobile_service_banner_video_ogv');
$service_banner_video_url = get_field('mobile_service_banner_video_url');
// Any tablet device.
if(!$detect->isTablet() ){
    // Image for mobile banner will here
    $services_banner_image = get_field('mobile_service_banner_image');
} else {
    if(empty(get_field('tablet_service_banner_image'))) {
        $services_banner_image = get_field('mobile_service_banner_image');
    } else {
        $services_banner_image = get_field('tablet_service_banner_image');
    }
}

$service_banner_top_image = get_field('service_banner_top_image');
$service_banner_title = strip_tags(get_field('service_banner_title'), '<br><span><img>');
$service_banner_description = get_field('service_banner_description');
$service_button_title = strip_tags(get_field('service_button_title'), '<br><span><img>');
$service_button_link = get_field('service_button_link');
if(!empty($services_banner_image) || !empty($service_banner_video_mp4) || !empty($service_banner_video_url)):

if(($select_banner_videoimage_banner['value'] == 'self_hosted_video') && !empty($service_banner_video_mp4)  ) {
    $hostedVideo = 'mp4:'.$service_banner_video_mp4['url'];
    if (!empty($service_banner_video_ogv)) {
        $hostedVideo .= ',webm:'.$service_banner_video_webm['url'];
    }
    if (!empty($service_banner_video_ogv)) {
        $hostedVideo .= ',ogv:'.$service_banner_video_ogv['url'];
    }
?> 
    <!-- Background Self-Hosted Video Parallax -->
    <div class="jarallax jarallax-video-bg" data-jarallax data-video-src="<?php echo $hostedVideo;?>">
<?php } else if(($select_banner_videoimage_banner['value'] == 'vimeo_youtube_video') &&  !empty($service_banner_video_url)) {?> 
    <!-- Background Self-Hosted Video Parallax -->
    <div class="jarallax  jarallax-video-bg" data-jarallax data-video-src="<?php echo esc_url($service_banner_video_url);?>">
<?php } else if(($select_banner_videoimage_banner['value'] == 'image') &&  !empty($service_banner_video_url)) { ?>
    <div class="service-banner header-jarallax" style="background-image: url('<?php echo esc_url($services_banner_image['url']);?>');">
<?php } else { ?>
    <div class="service-banner service-banner_fixed" style="background-image: url('<?php echo esc_url($services_banner_image['url']);?>');">
<?php }
?>
    <div class="service-banner-image container">
        <div class="row">
            <div class="col col-12 col-md-4"></div>
            <div class="services-banner-texts col col-12 col-md-8 d-flex flex-column justify-content-md-end align-items-md-end">
                <?php if (!empty($service_banner_top_image)) {
                    echo '<div class="services-banner-top-logo">';
                    echo '<img src="'.$service_banner_top_image['url'].'" alt="'.$service_banner_title.'"/>';
                    echo '</div>';
                }
                if(!empty($service_banner_title)) { 
                    echo '<h2 class="service-banner-title">'.$service_banner_title.'</h2>';
                } ?>
                 <?php if(!empty($service_banner_description)) { 
                    echo '<div class="service-banner-description">'.$service_banner_description.'</div>';
                } ?>
                 <?php if(!empty($service_button_title) && (!empty($service_button_link)) ) { 
                    echo '<div class="banner-button"><a class="service-banner-link" href="'.$service_button_link.'">'.$service_button_title.'</a></div>';
                } ?>
                <?php if( have_rows('our_award') ): ?>
                    <div class="d-flex service-our_award">
                    <?php while( have_rows('our_award') ): the_row(); 
                        $award_image = get_sub_field('award_image');
                        if(!empty($award_image)) :
                        ?>
                        <div>
                            <?php  echo '<img src="'.esc_url($award_image['url']).'">' ; ?>
                        </div>
                    <?php 
                     endif;
                    endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>