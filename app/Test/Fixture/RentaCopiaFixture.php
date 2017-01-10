<?php
/**
 * RentaCopiaFixture
 *
 */
class RentaCopiaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'renta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pelicula_copia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'videojuego_copia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'renta_id' => 1,
			'pelicula_copia_id' => 1,
			'videojuego_copia_id' => 1
		),
	);

}
