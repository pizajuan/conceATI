<div id="content-car" class= "container view-content">
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Citas para Servicios</h1>
		</div>
		<div class="col-md-12">
			<div class="list-group">
				<?php foreach($dataToShow as $data): ?>
					<a href="#" class="list-group-item">
					  <h4 class="list-group-item-heading"><?php echo $data['Date']['date'] ?></h4>
					  <p class="list-group-item-text"><?php echo $data['Service']['name'] ?></p>
					</a>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>

</div>