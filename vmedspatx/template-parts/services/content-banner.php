<?php 
// get service page banner image
$services_banner_image = get_field('service_banner_image');
$service_banner_title = get_field('service_banner_title');
$service_banner_description = get_field('service_banner_description');
$service_button_title = get_field('service_button_title');
$service_button_link = get_field('service_button_link');
if(!empty($services_banner_image)):
?>
<div class="service-banner header-jarallax" style="background-image: url('<?php echo esc_url($services_banner_image['url']);?>');">
    <div class="service-banner-image container">
        <div class="row">
            <div class="col col-12 col-md-4"></div>
            <div class="services-banner-texts col col-12 col-md-8 d-flex flex-column justify-content-md-end align-items-md-end">
                <?php if(!empty($service_banner_title)) { 
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