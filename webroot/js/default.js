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
				$('#logOutTag').click(function(){
					logout();
				});
				alert("Ingreso Exitoso!!!");

	    	}else if(responseTextObj.success == '0'){
	    		alert("Usuario o Contraseña Inválidos");
	    	}
	    }
	});
}