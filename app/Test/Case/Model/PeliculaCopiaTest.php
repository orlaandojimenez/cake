<?php
App::uses('PeliculaCopia', 'Model');

/**
 * PeliculaCopia Test Case
 *
 */
class PeliculaCopiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula_copia',
		'app.pelicula',
		'app.pelicula_actor',
		'app.pelicula_director',
		'app.pelicula_premio',
		'app.pelicula_productor',
		'app.copia_idioma',
		'app.renta_copia',
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculaCopia = ClassRegistry::init('PeliculaCopia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculaCopia);

		parent::tearDown();
	}

}
