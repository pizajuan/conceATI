<div id="content-car" class= "container view-content">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Mi Carro</h1>
			</div>
		</div>
		<div class="col-md-6">
			<form action="">
				<div class="form-group">
					<label for="">Placa</label>
					<input id="placa" name="Placa" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Año</label>
					<input id="anio" name="Anio" type="text" class="form-control">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<form action="">
				<div class="form-group">
					<label for="">Tipo</label>
					<select name="selectbasic" id="selectType" class="form-control">
						<?php for ($i=0; $i < sizeof($dataTypeCar); $i++) { ?>
							<option value="<?php echo $dataTypeCar[$i]['TypeCar']['id'] ?>"><?php echo $dataTypeCar[$i]['TypeCar']['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Modelo</label>
					<select name="selectModel" id="selectbasic" class="form-control">
						<?php for ($i=0; $i < sizeof($dataCarModel); $i++) { ?>
							<option value="<?php echo $dataCarModel[$i]['CarModel']['id'] ?>"><?php echo $dataCarModel[$i]['CarModel']['name'] ?></option>
						<?php } ?>
					</select>
				</div>
			</form>
		</div>
		<div class="col-md-3 col-md-offset-5">
			<button id="guardarCarro" name="submitbtn" class="btn btn-primary btn-lg">Guardar</button>
		</div>
	</div>
</div>