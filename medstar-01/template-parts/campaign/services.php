<?php 
	$head = get_sub_field('head');
	$items = get_sub_field('items');

?>
<section class="section services">
	<div class="container ">
		<div class="row">
			<div class="e_widget">
				<?php if($head ):?>
					<h2 class="head"><?php echo $head; ?></h2>
				<?php endif;?>
				<div class="sv_items" >
				<?php if($items ):
					foreach ($items as $key => $value) :?>
					<div class="item" style="background: url(<?php echo $value['image']['url'];?>) center center;min-height: 400px;">
						<div class="e_name">
							<h3><?php echo $value['name']?></h3>
						</div>
					</div>
				<?php endforeach; endif;?>
				</div>
			</div>
		</div>
	</div>
</section>