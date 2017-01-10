<?php
/**
 * RentaFixture
 *
 */
class RentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha_inicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'fecha_devolucion' => array('type' => 'date', 'null' => false, 'default' => null),
		'multa' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'membresia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'fecha_inicio' => '2016-03-01',
			'fecha_devolucion' => '2016-03-01',
			'multa' => 1,
			'membresia_id' => 1
		),
	);

}
