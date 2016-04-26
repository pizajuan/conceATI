<<<<<<< HEAD
<?php
/**
 * Date Fixture
 */
class DateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => true, 'default' => null),
		'car_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'date' => '2016-04-21',
			'car_id' => '',
			'user_id' => '',
			'state_id' => 1
		),
	);

}
=======
<?php
/**
 * Date Fixture
 */
class DateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => true, 'default' => null),
		'car_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'date' => '2016-04-21',
			'car_id' => '',
			'user_id' => '',
			'state_id' => 1
		),
	);

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
