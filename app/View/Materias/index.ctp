<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<center><h2>Listado de Materias</h2></center>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-2">
<?php
echo '<br><center>'.$this->Html->link("Registrar Materia", array('controller' =>'materias','action'=> 'agregar'),array('class'=>'btn btn-primary btn-lg')).'</center>';
?>
<br>
</div>

		<table class='table'>
		<th>Nombre</th>
		<th>Grado</th>
		<th>Profesor</th>
		<th></th>
	<?php
	foreach ($materias as $materia){
		echo '<tr>';
		echo '<td>'.$materia['Materia']['nombre'].'</td>';
		echo '<td>'.$materia['Materia']['grado'].'</td>';
		echo '<td>'.$materia['Materia']['profesor'].'</td>';
		echo '<td>'.$this->Html->link("+", array('controller' =>'materias','action'=> 'detalle/'.$materia['Materia']['id']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	