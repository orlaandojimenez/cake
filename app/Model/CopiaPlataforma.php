<?php
App::uses('AppModel', 'Model');
/**
 * CopiaPlataforma Model
 *
 * @property VideojuegoCopia $VideojuegoCopia
 */
class CopiaPlataforma extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'plataforma';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'plataforma' => array(
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
		'VideojuegoCopia' => array(
			'className' => 'VideojuegoCopia',
			'foreignKey' => 'videojuego_copia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
