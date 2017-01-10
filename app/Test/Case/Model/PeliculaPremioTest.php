<?php
App::uses('PeliculaPremio', 'Model');

/**
 * PeliculaPremio Test Case
 *
 */
class PeliculaPremioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula_premio',
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
		'app.pelicula_productor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeliculaPremio = ClassRegistry::init('PeliculaPremio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculaPremio);

		parent::tearDown();
	}

}
