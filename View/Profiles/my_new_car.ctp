<div id="content-car" class= "container">
	<div class="page-header">
		<h1>Mi Carro</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<label>Ingrese Los Datos del Vehiculo</label>
			<div class= "col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
				<div class="row">
					<div class= "col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>Placa Nro: </label>
						<input id="placa" name="Placa" type="text" placeholder="" class="form-control input-md">
					</div>
					<div class= "col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>Tipo de Carro: </label>
						<div class="form-group">
						  <div class="col-md-6">
						    <select id="selectType" name="selectbasic" class="form-control">

						    	<?php for ($i=0; $i < sizeof($dataTypeCar); $i++) { ?>
						    		<option value="<?php echo $dataTypeCar[$i]['TypeCar']['id'] ?>"><?php echo $dataTypeCar[$i]['TypeCar']['name'] ?></option>
						    	<?php } ?>
						    </select>
						  </div>
						</div>
				</div>
				<div class="row">
					<div class= "col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>Modelo: </label>
						<div class="form-group">
						  <div class="col-md-6">
						    <select id="selectModel" name="selectbasic" class="form-control">

						    	<?php for ($i=0; $i < sizeof($dataCarModel); $i++) { ?>
						    		<option value="<?php echo $dataCarModel[$i]['CarModel']['id'] ?>"><?php echo $dataCarModel[$i]['CarModel']['name'] ?></option>
						    	<?php } ?>
						    </select>
						  </div>
						</div>
					</div>
					<div class= "col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>Año: </label>
						<input id="anio" name="Anio" type="text" placeholder="" class="form-control input-xs">
					</div>
				</div>
				<div class="row">
					<div class= "col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<button id="guardarCarro" name="submitbtn" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>