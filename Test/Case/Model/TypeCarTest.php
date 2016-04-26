<<<<<<< HEAD
<?php
App::uses('TypeCar', 'Model');

/**
 * TypeCar Test Case
 */
class TypeCarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_car',
		'app.car_model',
		'app.car',
		'app.user',
		'app.type_cars',
		'app.date',
		'app.date_service',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeCar = ClassRegistry::init('TypeCar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeCar);

		parent::tearDown();
	}

}
=======
<?php
App::uses('TypeCar', 'Model');

/**
 * TypeCar Test Case
 */
class TypeCarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_car',
		'app.car_model',
		'app.car',
		'app.user',
		'app.type_cars',
		'app.date',
		'app.date_service',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeCar = ClassRegistry::init('TypeCar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeCar);

		parent::tearDown();
	}

}
>>>>>>> 7f6ebcc763673f05df2af6dbeb74f19419476a48
