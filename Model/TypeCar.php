<<<<<<< HEAD
<?php
App::uses('AppModel', 'Model');
/**
 * TypeCar Model
 *
 * @property CarModel $CarModel
 */
class TypeCar extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CarModel' => array(
			'className' => 'CarModel',
			'foreignKey' => 'type_car_id',
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
 * TypeCar Model
 *
 * @property CarModel $CarModel
 */
class TypeCar extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CarModel' => array(
			'className' => 'CarModel',
			'foreignKey' => 'type_car_id',
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