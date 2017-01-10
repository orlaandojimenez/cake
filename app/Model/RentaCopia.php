<?php
App::uses('AppModel', 'Model');
/**
 * RentaCopia Model
 *
 * @property Renta $Renta
 * @property PeliculaCopia $PeliculaCopia
 * @property VideojuegoCopia $VideojuegoCopia
 */
class RentaCopia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Renta' => array(
			'className' => 'Renta',
			'foreignKey' => 'renta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			
			
		),
		'PeliculaCopia' => array(
			'className' => 'PeliculaCopia',
			'foreignKey' => 'pelicula_copia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'VideojuegoCopia' => array(
			'className' => 'VideojuegoCopia',
			'foreignKey' => 'videojuego_copia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
