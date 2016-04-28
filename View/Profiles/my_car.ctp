<div id="content-car" class= "container">
	<div class="page-header">
		<h1>Mi Carro</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class= "col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
				<div class="row">
					<div class= "col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<?php echo $this->Html->image($dataToShow['CarModel']['image'], array('class'=>'img-responsive catalogs-photo')) ?> 
					</div>
					<div class= "col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="row">
							<label>Placa Nro: </label>
							<label style="color:blue"> <?php echo $dataToShow['Car']['car_id'] ?></label>
						</div>
						<div class= "row">
							<label>Tipo de Carro: </label>
							<label style="color:blue"><?php echo $dataToShow['TypeCar']['name'] ?></label>
						</div>
						<div class= "row">
							<label>Modelo: </label>
							<label style="color:blue"><?php echo $dataToShow['CarModel']['name'] ?></label>
						</div>
						<div class= "row">
							<label>Año: </label>
							<label style="color:blue"><?php echo $dataToShow['Car']['year'] ?></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>