<?php
App::uses('PeliculaActor', 'Model');

/**
 * PeliculaActor Test Case
 *
 */
class PeliculaActorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pelicula_actor',
		'app.pelicula',
		'app.pelicula_copia',
		'app.copia_idioma',
		'app.renta_copia',
		'app.renta',
		'app.membresia',
		'app.cliente',
		'app.cliente_telefono',
		'app.pelicula_director',
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
		$this->PeliculaActor = ClassRegistry::init('PeliculaActor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeliculaActor);

		parent::tearDown();
	}

}
