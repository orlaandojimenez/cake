<?php
App::uses('AppModel', 'Model');
/**
 * VideojuegoCopia Model
 *
 * @property Videojuego $Videojuego
 * @property CopiaPlataforma $CopiaPlataforma
 * @property RentaCopia $RentaCopia
 */
class VideojuegoCopia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'videojuego_id';

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
		'Videojuego' => array(
			'className' => 'Videojuego',
			'foreignKey' => 'videojuego_id',
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
		'CopiaPlataforma' => array(
			'className' => 'CopiaPlataforma',
			'foreignKey' => 'videojuego_copia_id',
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
			'foreignKey' => 'videojuego_copia_id',
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
