<?php
App::uses('AppModel', 'Model');
/**
 * PeliculaActor Model
 *
 * @property Pelicula $Pelicula
 */
class PeliculaActor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pelicula' => array(
			'className' => 'Pelicula',
			'foreignKey' => 'pelicula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
