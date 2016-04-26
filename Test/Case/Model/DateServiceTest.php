<<<<<<< HEAD
<?php
App::uses('DateService', 'Model');

/**
 * DateService Test Case
 */
class DateServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.date_service',
		'app.date',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DateService = ClassRegistry::init('DateService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DateService);

		parent::tearDown();
	}

}
=======
<?php
App::uses('DateService', 'Model');

/**
 * DateService Test Case
 */
class DateServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.date_service',
		'app.date',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DateService = ClassRegistry::init('DateService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DateService);

		parent::tearDown();
	}

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
