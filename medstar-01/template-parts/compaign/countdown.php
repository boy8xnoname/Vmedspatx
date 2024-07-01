<?php 
	$head = get_sub_field('head');
	$background = get_sub_field('background');
	$content = get_sub_field('content');
	$button = get_sub_field('button');
	$time = get_sub_field('time');
	wp_localize_script( 'countdown-timer-script', 'countdown_timer_date', array( 
		'day' => $time['day'],
		'hours' => $time['hours'],
		'minutes' => $time['minutes'],
		'seconds' => $time['seconds'],

) );
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
				<?php endif;?>
				<?php if($button ):?>
					<a class="button open-popup" role="button">
						<?php echo $button?>
					</a>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>