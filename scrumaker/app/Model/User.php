<?php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'EMAIL' => array(
			'invalida' => array(
       		 	'rule' => array('EMAIL', true),
       		 	'message' => 'Por favor indique una dirección de correo electrónico válida.',
       		 ),
			'unico' => array(
        	 'rule' => 'isUnique',
        	 'message' => 'Esta dirección de email ya ha sido asignada',
        	 ),
    ),
		'USERNAME' => array(
			'notEmpty' => array(
				'rule' => 'notBlank',
				'rule' => 'isUnique',
				'message' => 'Este nombre de usuario ya ha sido asignado',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PASSWORD' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				               ),
			'correcta' => array(
					'rule' => array('custom', '/^[a-z0-9]{3,}$/i'),
        			'message' => 'Sólo letras y enteros, mínimo 3 caracteres',
        		),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
		'password_confirm' => array( 
			'required'=>'notBlank', 
			'match'=>array( 
				'rule' => 'PasswordConfirm', 
				'message' => 'La contraseña no coincide' ),
				 ),
		);


	function PasswordConfirm($data) 
	{ 
		if ($this->data['User']['PASSWORD'] !== $data['password_confirm'])
		 { 
		 	return false; 
		 }
		  return true; 
	}
	
	public function beforeSave($options = array())
	{
		if(isset($this->data[$this->alias]['PASSWORD']))
		{
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['PASSWORD'] = $passwordHasher->hash($this->data[$this->alias]['PASSWORD']);
		}
		return true;
	}
}
