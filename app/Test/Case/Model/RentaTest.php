<?php
App::uses('Renta', 'Model');

/**
 * Renta Test Case
 *
 */
class RentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono',
		'app.renta_copia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Renta = ClassRegistry::init('Renta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Renta);

		parent::tearDown();
	}

}
