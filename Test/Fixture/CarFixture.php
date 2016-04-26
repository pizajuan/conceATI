<<<<<<< HEAD
<?php
/**
 * Car Fixture
 */
class CarFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'car_model_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'car_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'type_cars_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'car_model_id' => '',
			'car_id' => '',
			'user_id' => '',
			'type_cars_id' => '',
			'year' => 1,
			'state_id' => 1
		),
	);

}
=======
<?php
/**
 * Car Fixture
 */
class CarFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'car_model_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'car_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'type_cars_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'state_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'car_model_id' => '',
			'car_id' => '',
			'user_id' => '',
			'type_cars_id' => '',
			'year' => 1,
			'state_id' => 1
		),
	);

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
