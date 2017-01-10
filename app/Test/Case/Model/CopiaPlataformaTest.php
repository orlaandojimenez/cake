<?php
App::uses('CopiaPlataforma', 'Model');

/**
 * CopiaPlataforma Test Case
 *
 */
class CopiaPlataformaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.copia_plataforma',
		'app.videojuego_copia',
		'app.videojuego'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CopiaPlataforma = ClassRegistry::init('CopiaPlataforma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CopiaPlataforma);

		parent::tearDown();
	}

}
