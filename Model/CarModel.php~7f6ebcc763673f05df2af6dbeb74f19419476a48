<?php
App::uses('AppModel', 'Model');
/**
 * CarModel Model
 *
 * @property TypeCar $TypeCar
 * @property Car $Car
 */
class CarModel extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TypeCar' => array(
			'className' => 'TypeCar',
			'foreignKey' => 'type_car_id',
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
		'Car' => array(
			'className' => 'Car',
			'foreignKey' => 'car_model_id',
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
