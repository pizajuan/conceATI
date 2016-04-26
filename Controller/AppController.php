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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public function beforeFilter() {
	 	parent::beforeFilter();
		$this->Auth->allow('logIn','saveRegister','index', 'lol');  
    }
	public $components = array(
		'Session',
        'Auth' => array(
  			'loginRedirect' => '/',
			'logoutRedirect' => '/',
			'authorize' => 'Controller',
            
            'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email'),	
				)
			)
        )
    );

	public function printWithFormat($var, $withDie = false) { //Funcion de control para imprimir resultados
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
		
		if($withDie) {
			die();
		}
	}

	public function isAuthorized($user = null) {
        // Any registered user can access public functions
        if (empty($this->request->params['admin'])) {
            return true;
        }

        // Only admins can access admin functions
        if (isset($this->request->params['admin'])) {
            return (bool)($user['role'] === 'admin');
        }

        // Default deny
        return false;
    }


}
