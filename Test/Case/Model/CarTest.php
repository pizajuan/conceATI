<<<<<<< HEAD
<?php
App::uses('Car', 'Model');

/**
 * Car Test Case
 */
class CarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car',
		'app.car_model',
		'app.type_car',
		'app.user',
		'app.type_cars',
		'app.date'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car = ClassRegistry::init('Car');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Car', 'Model');

/**
 * Car Test Case
 */
class CarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car',
		'app.car_model',
		'app.type_car',
		'app.user',
		'app.type_cars',
		'app.date'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Car = ClassRegistry::init('Car');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car);

		parent::tearDown();
	}

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
