<div class="row">
	<div class="col-lg-2">	
	</div>

<div class="col-lg-8">	
<center><h2>Grupo <?php echo $grupo['Grupo']['nombre']?></h2></center>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>


<div class="col-lg-3">
<?php
echo '<br><center>'.$this->Html->link("Regresar", array('controller' =>'grupos','action'=> 'alumnos/'.$grupo['Grupo']['id']),array('class'=>'btn btn-danger btn-lg')).'</center>';
?>
</div>


<div class="col-lg-6">
<br>
<br>
<center><h3>Materias Asignadas</h3></center>
		<table class='table'>
		<th>Materia</th>
		<th>Profesor</th>
		<?php
	foreach ($materias as $materia){
		echo '<tr>';
		echo '<td>'.$materia['Materia']['nombre'].'</td>';
		echo '<td>'.$materia['Materia']['profesor'].'</td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>

	
	