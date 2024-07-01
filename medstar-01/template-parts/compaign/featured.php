<?php 
	$head = get_sub_field('head');
	$images = get_sub_field('images');

?>
<section class="section featured">
	<div class="container ">
		<div class="row">
			<div class="e_widget">
				<?php if($head ):?>
					<h2 class="head"><?php echo $head; ?></h2>
				<?php endif;?>
				<div class="ft_items" >
				<?php if($images ):
					foreach ($images as $key => $value) :?>
					<div class="item">
						<img src="<?php echo $value['url']?>">
					</div>
				<?php endforeach; endif;?>
				</div>
			</div>
		</div>
	</div>
</section>