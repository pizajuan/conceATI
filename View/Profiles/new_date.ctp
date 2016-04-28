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
					<label for="">Fecha</label>
					<input id="date" name="Date" type="text" class="form-control">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<form action="">
				<div class="form-group">
					<label for="">Service</label>
					<select name="selectbasic" id="selectService" class="form-control">
						<?php foreach ($services as $servicio): ?>
							<option value="<?php echo $servicio['Service']['id'] ?>"><?php echo $servicio['Service']['name'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</form>
		</div>
		<div class="col-md-3 col-md-offset-5">
			<button id="guardarCita" name="submitbtn" class="btn btn-primary btn-lg">Guardar</button>
		</div>
	</div>
</div>