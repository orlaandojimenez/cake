<?php
App::uses('CopiaIdioma', 'Model');

/**
 * CopiaIdioma Test Case
 *
 */
class CopiaIdiomaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.copia_idioma',
		'app.pelicula_copia',
		'app.pelicula',
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
		$this->CopiaIdioma = ClassRegistry::init('CopiaIdioma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CopiaIdioma);

		parent::tearDown();
	}

}
