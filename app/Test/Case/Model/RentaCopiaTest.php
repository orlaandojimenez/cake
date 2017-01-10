<?php
App::uses('RentaCopia', 'Model');

/**
 * RentaCopia Test Case
 *
 */
class RentaCopiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.renta_copia',
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono',
		'app.pelicula_copia',
		'app.pelicula',
		'app.pelicula_actor',
		'app.pelicula_director',
		'app.pelicula_premio',
		'app.pelicula_productor',
		'app.copia_idioma',
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
		$this->RentaCopia = ClassRegistry::init('RentaCopia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RentaCopia);

		parent::tearDown();
	}

}
