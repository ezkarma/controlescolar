<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Alumnos que contiene el archivo</h2>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-4">	
</div>
<div class="col-lg-2">	
<?php
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-user'));
echo '<br><center>'.$this->Html->link($icono." Importar Alumnos", array('controller' =>'alumnos','action'=> 'actualizar'),array('class'=>'btn btn-success btn-sm','escape'=>false)).'</center>';
?>
<br>
</div>


		<table class='table'>
		<th>Curp</th>
		<th>Nombre</th>
		<th>Sexo</th>
				
	<?php
	foreach ($alumnos as $alumno){
		echo '<tr>';
		echo '<td>'.$alumno['AlumnoTemporal']['curp'].'</td>';
		echo '<td>'.$alumno['AlumnoTemporal']['nombre'].'</td>';
		echo '<td>'.$alumno['AlumnoTemporal']['sexo'].'</td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	