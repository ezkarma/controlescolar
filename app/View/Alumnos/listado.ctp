<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Alumnos</h2>

<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-2"><h3>Curp</h3><br></div>
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

<div class="col-lg-4">	
<?php
echo '<br>';
echo $this->Form->submit('Buscar',array('class' => 'btn btn-success')); 
?>
</div>

<div class="col-lg-2">
<?php
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-user'));
echo '<br><center>'.$this->Html->link($icono." Nuevo Alumno", array('controller' =>'users','action'=> 'agregar_alumno'),array('class'=>'btn btn-primary btn-lg','escape'=>false)).'</center>';
?>
</div>

		<table class='table'>
		<th>CURP</th>
		<th>Nombre</th>
		<th>Sexo</th>
		<th>Grado</th>
		<th>Grupo</th>
		<th></th>
		<th></th>
	<?php
	foreach ($usuarios as $usuario){
		echo '<tr>';
		echo '<td>'.$usuario['Alumno']['curp'].'</td>';
		echo '<td>'.$usuario['Alumno']['nombre'].' '.$usuario['Alumno']['apellidopat'].' '.$usuario['Alumno']['apellidomat'].'</td>';
		echo '<td>'.$usuario['Alumno']['sexo'].'</td>';
		echo '<td><center>'.$usuario['Alumno']['grado'].'</center></td>';
		echo '<td>Grupo</td>';
		echo '<td>'.$this->Html->link("Ver Calificaciones", array('controller' =>'calificacions','action'=> 'alumno/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		if($usuario['Alumno']['tutor_id'] != null){
		$title = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-envelope'));
		
		echo '<td>'.$this->Html->link($title.' Tutor', array('controller' =>'mensajes','action'=> 'mensaje/'.$usuario['Alumno']['tutor_id']),array('class'=>'btn btn-info btn-sm','escape'=>false)).'</center></td>';
		}
		else echo '<td>Sin Tutor asignado</td>'; 
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	