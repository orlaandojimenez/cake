<?php
App::uses('VideojuegoCopia', 'Model');

/**
 * VideojuegoCopia Test Case
 *
 */
class VideojuegoCopiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->VideojuegoCopia = ClassRegistry::init('VideojuegoCopia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VideojuegoCopia);

		parent::tearDown();
	}

}
