<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */


App::uses('AppController', 'Controller');
App::uses('User', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class ProfilesController extends AppController {

	public $uses = array('User');
	
	public function beforeFilter() {
	 	parent::beforeFilter();
		$this->Auth->allow('logIn','saveRegister');  
    }

    public function saveRegister() {
    	$this->autoRender = false ;
    	$success = 0;

    	$nameRegister=array_key_exists("nombre", $_POST) ? $_POST['nombre'] : NULL;
    	$lastNameRegister=array_key_exists("apellido", $_POST) ? $_POST['apellido'] : NULL;
    	$cedulaRegister=array_key_exists("cedula", $_POST) ? $_POST['cedula'] : NULL;
    	$emailRegister=array_key_exists("correo", $_POST) ? $_POST['correo'] : NULL;
    	$passwordRegister=array_key_exists("pass", $_POST) ? $_POST['pass'] : NULL;

    	$userToCreate['User']['name'] = array_key_exists("nombre", $_POST) ? $_POST['nombre'] : NULL;
    	$userToCreate['User']['last_name'] = array_key_exists("apellido", $_POST) ? $_POST['apellido'] : NULL;
    	$userToCreate['User']['ci_rif'] = array_key_exists("cedula", $_POST) ? $_POST['cedula'] : NULL;
    	$userToCreate['User']['email'] = array_key_exists("correo", $_POST) ? $_POST['correo'] : NULL;
    	$userToCreate['User']['password'] = array_key_exists("pass", $_POST) ? $_POST['pass'] : NULL;
    	$userToCreate['User']['type_user_id'] = 1;
    	$userToCreate['User']['state_id'] = 1;

    	$existUser = $this->User->find('first', array(
					'conditions' => array (
						'User.state_id' => 1,
						'User.email'=> $userToCreate['User']['email'],
						),
					'recursive'=> -1,					
				));

    	if (sizeof($existUser) > 0){
    		//$this->printWithFormat($existUser, false);
    		$success = 0;
    	}else{
    		//$this->printWithFormat("No esta en bd",false);
    			
    		$success = 1;
    		$this->User->save($userToCreate);
    	}

    	return $success;   	    	

    }

    public function logIn(){
    	$this->autoRender = false ;
    	$success = 0;
    	
    	$emailLogIn=array_key_exists("correo", $_POST) ? $_POST['correo'] : NULL;
    	$passwordLogIn=array_key_exists("pass", $_POST) ? $_POST['pass'] : NULL;	

    	//$this->printWithFormat($emailLogIn, false);
    	//$this->printWithFormat($passwordLogIn, false);

    	$existUser = $this->User->find('first', array(
					'conditions' => array (
						'User.state_id' => 1,
						'User.email'=> $emailLogIn,
						'User.password' => $passwordLogIn
						),
					'recursive'=> -1,					
			));

    	//$this->printWithFormat($existUser,true);


    	if (sizeof($existUser) > 0){
    		//loggear
    		$this->Session->write('Auth.User', $existUser['User']);
    		$this->Auth->login();
    		//$this->printWithFormat($this->Auth->user(),true);	
    		$success = 1;
    		$name = ucfirst($this->Auth->user('name'));

    	}else{
    		//no existe el usuario
    		$success = 0;
    	}

    	//return $success;
    	echo (json_encode(array("success" => $success, "name" => $name)));
    }

    
    public function logOut() { //Cerrar sesion
    	$this->autoRender = false ;
    	$this->Session->delete('User');
		$this->Session->delete('Auth.User');
		$this->Session->destroy();
		//$this->redirect('/');

		$success = 1;

		return $success;
	}
	
}
?>