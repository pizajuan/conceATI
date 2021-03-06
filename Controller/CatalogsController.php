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



/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class CatalogsController extends AppController {
	public $uses=array('CarModel');

	function beforeFilter(){
	    parent::beforeFilter();
	}

	public $helpers = array('Html', 'Form');

    function index() {

    }

    function lol() {
    	$this->set('cars', $this->CarModel->find('all'));
    }

    function view($id = null){
    	$this->set('car', $this->CarModel->findById($id));
    }
}
?>