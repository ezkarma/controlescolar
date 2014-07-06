<div class="row">
	<div class="col-lg-4">	
	</div>
		<div class="col-lg-4">	        

<center><h2>Listado de Materias</h2></center>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>


<?php
echo '<br><center>'.$this->Html->link("Registrar Materia", array('controller' =>'materias','action'=> 'agregar'),array('class'=>'btn btn-primary btn-lg')).'</center>';
?>
<br>

		<table class='table'>
		<th>Nombre</th>
		<th>Grado</th>
		<th>Profesor</th>
		
	<?php
	foreach ($materias as $materia){
		echo '<tr>';
		echo '<td>'.$materia['Materia']['nombre'].'</td>';
		echo '<td>'.$materia['Materia']['grado'].'</td>';
		echo '<td>'.$materia['Materia']['profesor'].'</td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	