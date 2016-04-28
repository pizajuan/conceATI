<div id="content-services" class= "container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Servicios</h1>
			</div>
		</div>
		<div class="col-md-12">
			<div class="list-group">
				<?php foreach ($services as $service): ?>
					<a href="#" class="list-group-item">
					  <h4 class="list-group-item-heading"><?php echo $service['Service']['name'] ?></h4>
					  <p class="list-group-item-text"><?php echo $service['Service']['description'] ?></p>
					</a>
				<?php endforeach ?>
			</div>
		</div>
	</div>	
</div>