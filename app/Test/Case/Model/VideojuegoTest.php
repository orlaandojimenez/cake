<?php
App::uses('Videojuego', 'Model');

/**
 * Videojuego Test Case
 *
 */
class VideojuegoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.videojuego',
		'app.videojuego_copium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Videojuego = ClassRegistry::init('Videojuego');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Videojuego);

		parent::tearDown();
	}

}
