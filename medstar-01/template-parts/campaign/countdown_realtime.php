<?php 
	$head = get_sub_field('head');
	$background = get_sub_field('background');
	$content = get_sub_field('content');
	wp_localize_script( 'countdown-timer-script', 'countdown_timer_date', array( 'date' => get_sub_field( 'time' ) ) );
?>
<section class="section countdown" style="background: url(<?php echo $background['url']; ?>) no-repeat center;background-size:cover ;">
	<div class="container ">
		<div class="row">
			<div class="e_widget">
				<?php if($head ):?>
					<h2 class="head"><?php echo $head; ?></h2>
				<?php endif;?>
				<?php if($content ):?>
					<div class="e_content">
						<?php echo $content?>
					</div>
					<div class="time">
						<!--<h3>SPECIAL ENDS IN:</h3>-->
						<div id="countdown-timer"></div>
					</div>
					<a class="button" role="button">
							Send me my Gift Voucher
						</a>
				<?php endif;?>
				
			</div>
		</div>
	</div>
</section>