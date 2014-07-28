
<?php
class Tutor extends AppModel {

public $validate = array(
        'correo' => array(
            'required' => array(
                'rule' => array('email'),
                'message' => 'Escriba un correo valido'
            )
        ),
		 'nombre' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Escriba su nombre'
            )
        ),
		'apellidopat' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Escriba su apellido paterno'
            )
        ),
		'apellidomat' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Escriba su apellido materno'
            )
        ),
		'direccion' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Escriba su direccion'
            )
        ),
		'telefono' => array(
            'required' => array(
                'rule' => array('phone','/^[0-9]( ?[0-9]){8} ?[0-9]$/'),
                'message' => 'Escriba su telefono a 10 digitos'
            )
        )
	 );
	 
}
?>