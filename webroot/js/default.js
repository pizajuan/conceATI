$(document).ready(function() {
	$('#btn-registro').click(function(){
		$('#loginModal').modal('hide');	
	});

	$('#btnRegister').click(function(){
		//console.log("registrar");	
		registrar();
	});	

	$('#btnLogIn').click(function(){
		loggear();
	});

	$('#logOutTag').click(function(){
		logout();
		$('#logOutTag').off("click");
	});

	$('#loginName').click(function(){
		showMyCar();
	});

	$(function(){
	  var current_page_URL = location.href;
	  $( "a" ).each(function() {
	     if ($(this).attr("href") !== "#") {
	       var target_URL = $(this).prop("href");
	       if (target_URL == current_page_URL) {
	          $('nav a').parents('li, ul').removeClass('active');
	          $(this).parent('li').addClass('active');
	          return false;
	       }
	     }
	  });
	});

	$('#guardarCarro').click(function(){
		//console.log("guardar");
		//saveCar();

		var placa = $('#placa').val();
		console.log(placa);
		var tipo = $('#selectType').val();
		console.log(tipo);
		var modelo = $('#selectModel').val();
		var anio = $('#anio').val();

		var parametros = {
			"placa" : placa,
		    "tipo" : tipo,
		    "modelo" : modelo,
		    "anio" : anio
		};

		$.ajax({
			data:parametros,
		    url: window.location.protocol+"//" + window.location.hostname + "/profiles/saveCar",
		    type:  'post',
		    success:  function (response) {
		    	console.log(response);
		    	if(response == '1'){
					
					window.location = window.location.protocol + "//" + window.location.hostname + "/profiles/homeCar";
					
		    	}else if(response == '0'){
		    		
		    	}
		    }
		});	
	});

	$('#guardarCita').click(function(){
		//console.log("guardar");
		//saveCar();

		var fecha = $('#date').val();
		console.log(fecha);
		var servicio = $('#selectService').val();
		console.log(servicio);

		var parametros = {
			"servicio" : servicio,
		    "fecha" : fecha,
		};

		$.ajax({
			data:parametros,
		    url: window.location.protocol+"//" + window.location.hostname + "/profiles/saveDate",
		    type:  'post',
		    success:  function (response) {
		    	console.log(response);
		    	if(response == '1'){
					
					window.location = window.location.protocol + "//" + window.location.hostname + "/profiles/date";
					
		    	}else if(response == '0'){
		    		console.log(parametros);
		    	}
		    }
		});	
	});

});


function logout(){
	//console.log("logout");

	var parametros = {"id" : "1"};

	$.ajax({
		data:parametros,
	    url:window.location.protocol+"//" + window.location.hostname + "/profiles/logOut",
	    type:  'post',
	    success:  function (response) {
	    	//console.log(response);
	    	
	    	if(response == '1'){
	    		//console.log("response 1");
				$('#loginName').attr('class', 'hidden');
				$('#loginTag').removeClass('hidden');
				//$('#logOutTag').removeClass('hidden');
				$('#logOutTag').off("click");
				
				window.location = window.location.protocol + "//" + window.location.hostname + "/home";
				alert("Se ha cerrado la sesion!!");
				
	    	}else if(response == '0'){
	    		
	    	}
	    }
	});

}

function registrar(){
	var nombre = $('#regName').val();
	var apellido = $('#regLastName').val();
	var cedula = $('#regDocId').val();
	var correo = $('#regEmail').val();
	var pass = $('#regPass').val();
	var passTwo = $('#regPassTwo').val();

	if (pass == passTwo){
		//console.log('password true');

		var parametros = {
			"nombre" : nombre,
		    "apellido" : apellido,
		    "cedula" : cedula,
		    "correo" : correo,
		    "pass": pass
		};
	
		$.ajax({
			data:parametros,
	        url:window.location.protocol+"//" + window.location.hostname + "/profiles/saveRegister",
	        type:  'post',
	        success:  function (response) {
	        	console.log(response);
	        	if(response == '1'){
	        		console.log("response 1");
	        		$('#registroModal').modal('hide');
        			alert("Se ha registrado satisfactoriamente!!");
	        	}else if(response == '0'){
	        		alert("No se ha podido crear el registro de usuario!!!");
	        	}
    	    }
		});
	}
}

function loggear(){
	var correo = $('#logEmail').val();
	var pass = $('#logPass').val();

	var parametros = {
		"correo" : correo,
		"pass" : pass
	}

	$.ajax({
		data:parametros,
	    url:window.location.protocol+"//" + window.location.hostname + "/profiles/logIn",
	    type:  'post',
	    success:  function (response) {
	    	console.log(response);
	    	var responseTextObj = eval('(' + response + ')');
	    	
	    	if(responseTextObj.success == '1'){
	    		//console.log("response 1");
	    		console.log(responseTextObj.name);
	    		$('#loginModal').modal('hide');
				
				$('#loginTag').attr('class', 'hidden');
				$('#loginName').removeClass('hidden');
				$('#loginName').text(responseTextObj.name);
				//$('#logOutTag').removeClass('hidden');
				$('#loginName').click(function(){
					showMyCar();
				});
				$('#logOutTag').click(function(){
					logout();
				});
				alert("Ingreso Exitoso!!!");

				showMyCar(responseTextObj.name);
				

	    	}else if(responseTextObj.success == '0'){
	    		alert("Usuario o Contraseña Inválidos");
	    	}
	    }
	});
}

function showMyCar(name){

	console.log(name);
	window.location = window.location.protocol + "//" + window.location.hostname + "/profiles/homeCar";
	
	$('#guardarCarro').click(function(){
		console.log("guardar");
		//saveCar();
	});

}