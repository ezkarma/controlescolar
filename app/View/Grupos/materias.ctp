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
echo '<br><center>'.$this->Html->link("Alumnos", array('controller' =>'grupos','action'=> 'alumnos/'.$grupo['Grupo']['id']),array('class'=>'btn btn-primary btn-lg')).'</center>';
?>

</div>
<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Horario", array('controller' =>'grupos','action'=> 'agregar'),array('class'=>'btn btn-primary btn-lg')).'</center>';
echo '<br>';
?>
</div>

<div class="col-lg-8">
<center><h3>Materias Asignadas</h3></center>
</div>
		<table class='table'>
		<th>Materia</th>
		<th>Profesor</th>
		<th></th>
	<?php
	foreach ($materias as $materia){
		echo '<tr>';
		echo '<td>'.$materia['Materia']['nombre'].'</td>';
		echo '<td>'.$materia['Materia']['profesor'].'</td>';
		echo '<td>'.$this->Html->link("Agregar", array('controller' =>'grupos','action'=> 'detalle/'.$grupo['Grupo']['id']),array('class'=>'btn btn-warning')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>

	
	