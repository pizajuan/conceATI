<div id="content-catalogs" class= "container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Catálogo</h1>
			</div>
		</div>
		<?php foreach ($cars as $car ): ?>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="#" class="thumbnail">
					<?php echo $this->Html->image($car['CarModel']['image'], array('class'=>'img-responsive catalogs-photo')) ?> 
				</a>
			</div>
		<?php endforeach ?>
		<div class="col-md-12">
			<hr>
		</div>
		<div class="col-md-5 col-md-offset-3">
			<img src="/img/logo_principal.png" class="img-responsive" alt="">
		</div>
	</div>
</div>