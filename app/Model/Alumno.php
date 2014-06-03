
<?php
class Alumno extends AppModel {

	public $name = 'Alumno';
	
	
	public $belongsTo = array(
        'Grupo' => array(
            'className' => 'Grupo',
            'foreignKey' => 'grupo_id'
        )
    );
	
}
?>