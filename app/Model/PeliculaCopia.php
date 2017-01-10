<?php
App::uses('AppModel', 'Model');
/**
 * PeliculaCopia Model
 *
 * @property Pelicula $Pelicula
 * @property CopiaIdioma $CopiaIdioma
 * @property RentaCopia $RentaCopia
 */
class PeliculaCopia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'pelicula_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'formato' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'condicion' => array(
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CopiaIdioma' => array(
			'className' => 'CopiaIdioma',
			'foreignKey' => 'pelicula_copia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RentaCopia' => array(
			'className' => 'RentaCopia',
			'foreignKey' => 'pelicula_copia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
