<?php 
	$map = get_sub_field('map');
	$head = get_sub_field('head');

?>
<section class="section map">
	<div class="container ">
		<div class="row">
			<div class="">
				<?php if($head ):?>
					<h2 class="head"><?php echo $head; ?></h2>
				<?php endif;?>
					<?php if( $map ): 
					//var_dump($map);
						?>
					  <iframe loading="" src="https://maps.google.com/maps?q=<?php echo $map['address']?>&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" title="Contour Medspa Glenwood Springs" aria-label="Contour Medspa Glenwood Springs"></iframe>
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>


