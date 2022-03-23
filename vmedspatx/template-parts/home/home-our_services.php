<section class="home-section our_services">
		<div class="container">
		<?php 
		if( have_rows('setup_our_services_item') ):
			$ourServicesCount = 0;
			echo '<div class="our_services__list">';
			while( have_rows('setup_our_services_item') ) : the_row();
				$ourServicesCount++;
				echo '<div class="our-services__item item-'.$ourServicesCount.'">';
				// Get parent value.
				$services_item_image = get_sub_field('services_item_image');
				$services_item_heading = get_sub_field('services_item_heading');
				$services_item_description = get_sub_field('services_item_description');
				$services_item_learn_more_link = get_sub_field('services_item_learn_more_link');
				?>
					<div class="our-services__item-wrap">
						<div class="item-image">
							<div class="item-image-wrap">
								<img class="" src="<?php echo esc_url($services_item_image['url']);?>" alt="<?php echo $services_item_heading;?>">
							</div>
						</div>
						<div class="item-text">
							<div class="item-text-wrap">
								<h2 class="item-heading">
									<?php echo $services_item_heading;?>
								</h2>
								<?php if(!empty($services_item_description)) {?> 
									<div class="item-description">
										<?php echo $services_item_description;?>
									</div>
								<?php } ?>
								<?php if(!empty($services_item_learn_more_link)) {?> 
									<div class="item-link">
										<a href="<?php echo $services_item_learn_more_link;?>" title="<?php echo $services_item_heading;?>">
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