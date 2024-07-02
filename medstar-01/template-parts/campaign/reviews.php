<?php 
	$head = get_sub_field('head');
	$images = get_sub_field('images');
	$items = get_sub_field('items');

?>
<section class="section reviews">
	<div class="container ">
		<div class="row">
			<div class="e_widget">
				<?php if($head ):?>
					<h2 class="head"><?php echo $head; ?></h2>
				<?php endif;?>
				<?php if($images ):?>
					<img src="<?php echo $images['url']; ?>" width="220" />
				<?php endif;?>
				<div class="rv_items">
				<?php if($items ):
					foreach ($items as $key => $value) :?>
					<div class="item">
						<div class="e_content">
							<?php echo $value['content']?>
						</div>
						<div class="e_name">
							<?php echo $value['name']?>
						</div>
					</div>
				<?php endforeach; endif;?>
				</div>
			</div>
		</div>
	</div>
</section>