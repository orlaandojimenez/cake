<?php
App::uses('PeliculaDirector', 'Model');

/**
 * PeliculaDirector Test Case
 *
 */
class PeliculaDirectorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula_director',
		'app.pelicula',
		'app.pelicula_actor',
		'app.pelicula_copia',
		'app.copia_idioma',
		'app.renta_copia',
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono',
		'app.pelicula_premio',
		'app.pelicula_productor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculaDirector = ClassRegistry::init('PeliculaDirector');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculaDirector);

		parent::tearDown();
	}

}
