<<<<<<< HEAD
<?php
App::uses('AppModel', 'Model');
/**
 * Car Model
 *
 * @property CarModel $CarModel
 * @property User $User
 * @property TypeCars $TypeCars
 * @property Date $Date
 */
class Car extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CarModel' => array(
			'className' => 'CarModel',
			'foreignKey' => 'car_model_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TypeCars' => array(
			'className' => 'TypeCars',
			'foreignKey' => 'type_cars_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Date' => array(
			'className' => 'Date',
			'foreignKey' => 'car_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
=======
<?php
App::uses('AppModel', 'Model');
/**
 * Car Model
 *
 * @property CarModel $CarModel
 * @property User $User
 * @property TypeCars $TypeCars
 * @property Date $Date
 */
class Car extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CarModel' => array(
			'className' => 'CarModel',
			'foreignKey' => 'car_model_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TypeCars' => array(
			'className' => 'TypeCars',
			'foreignKey' => 'type_cars_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Date' => array(
			'className' => 'Date',
			'foreignKey' => 'car_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
