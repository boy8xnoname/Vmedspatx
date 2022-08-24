<section class="home-section our_services">
		<div class="container">
		<?php
		global $post;
		if ( get_field('home_page_parent', $post->ID ) ) {
		    $parent = get_field('home_page_parent', $post->ID );
		} else {
		    $parent = $post->ID;
		}
		$service_icon_before_title = get_field('service_icon_before_title', $parent);
		if( have_rows('setup_our_services_item', $parent) ):
			$ourServicesCount = 0;
			echo '<div class="our_services__list">';
			while( have_rows('setup_our_services_item', $parent) ) : the_row();
				$ourServicesCount++;
				echo '<div class="our-services__item item-'.$ourServicesCount.'">';
				// Get parent value.
				$services_item_image = get_sub_field('services_item_image');
				$services_item_heading = strip_tags(get_sub_field('services_item_heading'));
				$services_item_description = get_sub_field('services_item_description');
				$services_item_learn_more_link = get_sub_field('services_item_learn_more_link');
				?>
					<div class="our-services__item-wrap">
						<div class="item-image"  data-aos="fade-right" data-aos-delay="200">
							<div class="item-image-wrap">
								<img class="" src="<?php echo esc_url($services_item_image['url']);?>" alt="<?php echo $services_item_heading;?>">
							</div>
						</div>
						<div class="item-text"  data-aos="fade-left" data-aos-delay="200">
							<div class="item-text-wrap">
								<div class="item-header">
									<span class="heading-services-icon">
										<?php if(!empty($service_icon_before_title)) { ?>
											<img src="<?php echo $service_icon_before_title['url'];?>" alt="<?php echo $services_item_heading;?>">
										<?php } else { ?>
										<?php } ?>
									</span>
									<h2 class="item-heading">
										<?php echo $services_item_heading;?>
									</h2>
								</div>
								<?php if(!empty($services_item_description)) {?> 
									<div class="item-description">
										<?php echo $services_item_description;?>
									</div>
								<?php } ?>
								<?php if(!empty($services_item_learn_more_link)) {?> 
									<div class="item-link">
										<a class="btn btn-view-more btn-service" href="<?php echo $services_item_learn_more_link;?>" title="<?php echo $services_item_heading;?>">
											<?php echo esc_attr('LEARN MORE');?>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
				
				echo '</div>';
			endwhile;
			echo '</div>';
		endif;
		?>
		</div>
	</section>