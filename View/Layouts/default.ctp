<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->script('https://code.jquery.com/jquery-1.12.0.min.js');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('default');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('main.css');
		//echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container-all">
		<div id="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
							<div class="navbar-header">
								 
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button> <a class="navbar-brand" href="#" title="Volkswagen">
									<img src="/img/logo_principal.png" alt="logo" height="40" width="40" class="logo-vw"></a>
							</div>
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="/home">Inicio</a>
									</li>
									<li>
										<?php echo $this->Html->link('Catálogo', array('controller'=>'catalogs', 'action'=>'lol'))?>
									</li>
									<li>
										<?php echo $this->Html->link('Servicios', array('controller'=>'services'))?>
									</li>
									<li>
										<?php echo $this->Html->link('Conócenos', array('controller'=>'meetus'))?>
									</li>
									<li>
										<?php echo $this->Html->link('Contáctanos', array('controller'=>'contactus'))?>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a id="loginTag" href="#" data-toggle="modal" data-target="#loginModal">Ingresar</a>
										<a id="loginName" href="#" data-toggle="modal" data-target="#loginModal" class="hidden"></a>
									</li>
									<li>
										<a id="logOutTag" href="#" data-toggle="modal" data-target="#" class="">Salir</a>
									</li>
								</ul>
							</div>
							
						</nav>
					</div>
				</div>
			</div>
			<!-- Modal Ingreso -->
			<div class="modal fade" id="loginModal" role="dialog">
			   <div class="modal-dialog modal-md">
			    <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Ingreso al Sistema</h4>
			        </div>
			        <div class="modal-body">
			          <form id="loginForm" method="post" class="form-horizontal">
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Correo</label>
	                        <div class="col-xs-5">
	                            <input type="email" class="form-control" name="correo" id="logEmail"/>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Contraseña</label>
	                        <div class="col-xs-5">
	                            <input type="password" class="form-control" name="contrasena" id="logPass" />
	                        </div>
	                    </div>

	                    <div class="form-group">
	                    	<div class="col-xs-6 col-xs-offset-3">
	                        	<a href="#" data-toggle="modal" data-target="#registroModal" id="btn-registro">Registrate Aquí</a>
	                        </div>
	                    </div>
                	</form>
			        </div>
			        <div class="modal-footer">
			          	<div class="col-xs-5 col-xs-offset-3">
	                        <button id="btnLogIn" type="submit" class="btn btn-primary">Ingresar</button>
	                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	                   	</div>
			        </div>
			      </div>
			      
			    </div>
			</div>
			<!-- Modal Registro-->
			<div class="modal fade" id="registroModal" role="dialog">
			   <div class="modal-dialog modal-lg">
			    <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Registro en el Sistema</h4>
			        </div>
			        <div class="modal-body">
			          <form id="loginForm" method="post" class="form-horizontal">
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Nombre</label>
	                        <div class="col-xs-5">
	                            <input type="text" class="form-control" name="nombre" id="regName"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Apellido</label>
	                        <div class="col-xs-5">
	                            <input type="text" class="form-control" name="apellido" id="regLastName"/>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Cedula / RIF</label>
	                        <div class="col-xs-5">
	                            <input type="text" class="form-control" name="ci" id="regDocId" />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Correo</label>
	                        <div class="col-xs-5">
	                            <input type="email" class="form-control" name="correo" id="regEmail" />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Contraseña</label>
	                        <div class="col-xs-5">
	                            <input type="password" class="form-control" name="contrasena" id="regPass" />
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-xs-3 control-label">Repetir Contraseña</label>
	                        <div class="col-xs-5">
	                            <input type="password" class="form-control" name="contrasena" id="regPassTwo"/>
	                        </div>
	                    </div>

                	</form>
			        </div>
			        <div class="modal-footer">
			          	<div class="col-xs-5 col-xs-offset-3">
	                        <button type="button" class="btn btn-primary" id="btnRegister">Registrar</button>
	                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	                   	</div>
			        </div>
			      </div>
			      
			    </div>
			</div>


		</div>
		<div id="content" class ="">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
