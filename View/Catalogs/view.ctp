<div class="container view-content">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Html->image($car['CarModel']['image'], array('class'=>'img-responsive img-circle')); ?>
		</div>
		<div class="col-md-6">
			<h1><?php echo $car['CarModel']['name'] ?></h1>
			<h2><?php echo $car['CarModel']['price'] ?> Dolares</h2>
		</div>
	</div>
</div>