<?php
App::uses('PeliculaProductor', 'Model');

/**
 * PeliculaProductor Test Case
 *
 */
class PeliculaProductorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula_productor',
		'app.pelicula',
		'app.pelicula_actor',
		'app.pelicula_copia',
		'app.copia_idioma',
		'app.renta_copia',
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono',
		'app.pelicula_director',
		'app.pelicula_premio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculaProductor = ClassRegistry::init('PeliculaProductor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculaProductor);

		parent::tearDown();
	}

}
