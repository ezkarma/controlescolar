<div class="row">
        <div class="span3 centred">
		<center>
 <h3>Tutorados del Padre de Familia o Tutor</h3>
 <h2><?php echo $tutor['Tutor']['nombre'].' '.$tutor['Tutor']['apellidopat'].' '.$tutor['Tutor']['apellidomat'];?></h2>
        <br>
		</center>

<div class="col-lg-2">
</div>

<div class="col-lg-8">	
		<table class='table'>
		<th>Curp</th>
		<th>Nombre</th>
		<th>Grado</th>
		<th></th>
		<th></th>
	<?php
	foreach ($usuarios as $usuario){
		echo '<tr>';
		echo '<td>'.$usuario['Alumno']['curp'].'</td>';
		echo '<td>'.$usuario['Alumno']['nombre'].' '.$usuario['Alumno']['apellidopat'].' '.$usuario['Alumno']['apellidomat'].'</td>';
		echo '<td>'.$usuario['Alumno']['grado'].'</td>';
		echo '<td>'.$this->Html->link("Ver Calificaciones", array('controller' =>'calificacions','action'=> 'tutor/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-warning')).'</center></td>';
		echo '<td>'.$this->Html->link("Ver Horario", array('controller' =>'users','action'=> 'asignacion/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-primary')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>

</div>
</div>
