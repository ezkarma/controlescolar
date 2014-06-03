
<?php
class Grupo extends AppModel {
	
	public $name = 'Grupo';
	var $displayField = 'nombre';
	
	public $hasMany = array(
        'Alumno' => array(
            'className'    => 'Alumno',
            'foreignKey'    => 'grupo_id'
         )
    );
	
}
?>