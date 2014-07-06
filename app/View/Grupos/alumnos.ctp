<div class="row">
	<div class="col-lg-2">	
	</div>
	
<div class="col-lg-8">		

<h2>Grupo <?php echo $grupo['Grupo']['nombre']?></h2>

<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Materias", array('controller' =>'grupos','action'=> 'materias/'.$grupo['Grupo']['id']),array('class'=>'btn btn-primary btn-lg')).'</center>';
?>

</div>
<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Horario", array('controller' =>'grupos','action'=> 'horario/'.$grupo['Grupo']['nombre']),array('class'=>'btn btn-primary btn-lg')).'</center>';
echo '<br>';
?>
</div>

<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Enviar Citatorio", array('controller' =>'mensajes','action'=> 'citatorio/'.$grupo['Grupo']['nombre']),array('class'=>'btn btn-primary btn-lg')).'</center>';
echo '<br>';
?>
</div>

		<table class='table'>
		<th>Curp</th>
		<th>Nombre</th>
		<th></th>
	<?php
	foreach ($alumnos as $alumno){
		echo '<tr>';
		echo '<td>'.$alumno['Alumno']['curp'].'</td>';
		echo '<td>'.$alumno['Alumno']['nombre'].' '.$alumno['Alumno']['apellidopat'].' '.$alumno['Alumno']['apellidomat'].'</td>';
		echo '<td>'.$this->Html->link("Calificaciones", array('controller' =>'calificacions','action'=> 'alumno/'.$alumno['Alumno']['curp']),array('class'=>'btn btn-warning')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	