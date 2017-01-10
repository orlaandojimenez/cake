<?php
/**
 * CopiaPlataformaFixture
 *
 */
class CopiaPlataformaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'videojuego_copia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'plataforma' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'videojuego_copia_id' => 1,
			'plataforma' => 'Lorem ipsum dolor sit amet'
		),
	);

}
