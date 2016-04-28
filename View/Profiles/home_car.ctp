<div id="content-car" class= "container">
	<div class="page-header">
		<h1>Inicio Carro</h1>
	</div>

	<?php if(!empty($dataToShow)){ ?>
		<a href="/profiles/myCar">Ver mi Carro</a>
		<a href="/profiles/date">Solicitar Cita para Servicios</a>
	<?php }else{ ?>
		<a href="/profiles/myNewCar">Ingresar Carro</a>
	<?php } ?>
	
</div>