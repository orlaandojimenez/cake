<?php
App::uses('ClienteTelefono', 'Model');

/**
 * ClienteTelefono Test Case
 *
 */
class ClienteTelefonoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente_telefono',
		'app.cliente',
		'app.membresia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClienteTelefono = ClassRegistry::init('ClienteTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClienteTelefono);

		parent::tearDown();
	}

}
