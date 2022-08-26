<div class="footer-top-content container d-none d-md-block">
    <div class="row footer-widgets">
        <!-- Footer contact information -->
        <div class="widgets first-col-widget col col-sm-4 col-md-4 col-xl-5">
            <?php 
            if(get_theme_mod('location_repeater') != ''){
                $locationsList = get_theme_mod('location_repeater');
                echo '<div class="content-list">';
                foreach( $locationsList as $locationItem ) : 
                    $location_title = strip_tags($locationItem['location_title'], '<br><span><img>');
                    $location_phone_number = $locationItem['location_phone_number'];
                    $location_address = $locationItem['location_address'];
                    $location_google_map_url = $locationItem['location_google_map_url'];
                ?>
                     <div class="contact-item">
                        <h3><?php echo esc_attr($location_title);?></h3>
                        <ul>
                            <li>
                                <a href="tel:<?php echo esc_attr(clean_phone_link($location_phone_number));?>">
                                    <span class=""><?php echo esc_attr($location_phone_number);?></span>
                                </a>
                            </li>
                            <li>
                                <?php if(!empty($location_google_map_url)) {?> 
                                    <a target="_blank"> href="<?php echo esc_attr($location_google_map_url);?>">
                                <?php } ?>
                                    <?php echo nl2br($location_address);?>
                                <?php if(!empty($location_google_map_url)) {?> 
                                    </a>
                                <?php } ?>
                            </li>
                        </ul>
                        
                    </div>
                
                <?php
                endforeach;
                echo '</div>';
            } else { ?>
                <h3><?php echo esc_attr('Please access to "Customize > medstar01 Theme Options >medstar01 Footer Setting" for setup content');?></h3>
            <?php } ?>
       
        </div>
        <!-- Footer logo and partner logo content in footer -->
        <div class="widgets second-col-widget col col-sm-4 col-md-4 col-xl-2 text-center">
            <?php
            if(get_theme_mod('footer_logo') != ''){
            ?>
                <div class="footer-logo">
                    <a class="footer-brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
                        <img class="footer-logo-image" src="<?php echo  get_theme_mod('footer_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
            <?php
                } 
            ?>
            <ul class='social-list navbar-nav menu menu-horizontal text-right'>
                <?php 
                $social_args = array(
                    'facebook',
                    'instagram',
                    'twitter',
                    'youtube'
                );
                foreach ($social_args as $value) {
                    if (!empty(Kirki::get_option($value))) {
                        echo '<li class="nav-item"><a class="social-item" href="'.Kirki::get_option($value).'" target="_blank"><i class="fab fa-'.$value.'"></i></a></li>';
                    }
                }
                ?>
            </ul>
            <div class="our-partner-logo">
                <?php 
                if(get_theme_mod('partner_repeater') != ''){
                    $partners = get_theme_mod('partner_repeater');
                    foreach( $partners as $partner ) : 
                    ?>
                        <div class="partner-item">
                            <div class="image-holder">
                                <a href="<?php echo $partner['partner_link']; ?>" title="Partner" target="_blank">
                                    <img src="<?php echo esc_url( $partner['partner_img'] ); ?>" alt="Partner logo image"> 
                                </a>
                            </div>
                        </div>
                    <?php
                    endforeach;
                } ?>
            </div>
        </div>
        <div class="widgets third-col-widget col col-sm-4 col-md-4 col-xl-5">
            <div class="row">
                <div class="col col-sm-12 col-lg-12 col-xl-12 text-end">
                    <?php
                        $timeWorking = get_theme_mod('time_working');
                        if(!empty($timeWorking)) {
                            echo apply_filters('the_content', $timeWorking);
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>