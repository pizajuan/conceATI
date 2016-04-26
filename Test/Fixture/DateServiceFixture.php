<?php
/**
 * DateService Fixture
 */
class DateServiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'service_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'date_id' => '',
			'service_id' => '',
			'state_id' => 1
		),
	);

}
