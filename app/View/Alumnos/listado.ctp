<body>
<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Alumnos</h2>

<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-2"><h3>Nombre</h3><br></div>
<div class="col-lg-4">	
<?php
echo $this->Form->create('UserBusqueda', array(
   'inputDefaults' => array(
        'label' => false,
        'div' => false
    )
));
echo '<br>';
echo $this->Form->input('curp',array('type' => 'textbox','class'=>'form-control'));
?>
</div>

<div class="col-lg-2">	
<?php
echo '<br>';
echo $this->Form->submit('Buscar',array('class' => 'btn btn-success')); 
?>
</div>

<div class="col-lg-2">
<?php
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-user'));
echo '<br><center>'.$this->Html->link($icono." Nuevo Alumno", array('controller' =>'users','action'=> 'agregar_alumno'),array('class'=>'btn btn-success btn-sm','escape'=>false)).'</center>';
?>
</div>

<div class="col-lg-2">	
<?php
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-list'));
echo '<br><center>'.$this->Html->link($icono." Importar Lista de Alumnos", array('controller' =>'alumnos','action'=> 'importar'),array('class'=>'btn btn-primary btn-sm','escape'=>false)).'</center>';
?>
</div>

		<table class='table'>
		<th></th>
		<th>CURP</th>
		<th>Nombre</th>
		<th>Sexo</th>
		<th>Grado</th>
		<th>Grupo</th>
		<th></th>
		<th></th>
		<th></th>
	<?php
	foreach ($usuarios as $usuario){
		echo '<tr>';
		$title = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-cog'));
		echo '<td>'.$this->Html->link($title, array('controller' =>'alumnos','action'=> 'modificar/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-success btn-sm','escape'=>false),'¿Esta seguro que realmente desea modificar los datos del alumno '.$usuario['Alumno']['nombre_completo'].'?').'</center></td>';
		echo '<td>'.$usuario['Alumno']['curp'].'</td>';
		echo '<td>'.$usuario['Alumno']['nombre'].' '.$usuario['Alumno']['apellidopat'].' '.$usuario['Alumno']['apellidomat'].'</td>';
		echo '<td>'.$usuario['Alumno']['sexo'].'</td>';
		echo '<td><center>'.$usuario['Grupo']['grado'].'</center></td>';
		echo '<td>'.$usuario['Grupo']['grupo'].'</td>';
		echo '<td>'.$this->Html->link("Ver Calificaciones", array('controller' =>'calificacions','action'=> 'alumno/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		if($usuario['Alumno']['tutor_id'] != null){
			$title = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-envelope'));
			echo '<td>'.$this->Html->link($title.' Tutor', array('controller' =>'mensajes','action'=> 'mensaje/'.$usuario['Alumno']['tutor_id']),array('class'=>'btn btn-info btn-sm','escape'=>false)).'</center></td>';
		}
		else echo '<td>Sin Tutor</td>'; 
			$title = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-trash'));
		echo '<td>'.$this->Html->link($title, array('controller' =>'alumnos','action'=> 'eliminar/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-danger btn-sm','escape'=>false),'¿Esta seguro que realmente desea eleminar al alumno '.$usuario['Alumno']['nombre_completo'].'?').'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</body>
	
	