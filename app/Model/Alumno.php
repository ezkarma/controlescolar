
<?php
class Alumno extends AppModel {

	public $name = 'Alumno';
	
	public $primaryKey = 'curp';
	
	public $belongsTo = array(
        'Grupo' => array(
            'className' => 'Grupo',
            'foreignKey' => 'grupo_id'
        )
    );
	
	public $validate = array(
        'curp' => array(
             'required' => array(
                'rule'    => array('notEmpty'),
                'message' => 'La CURP debe contener 18 caracteres'
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
        )
	);
	
		
}
?>