<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	    
		
	<?php if(!empty($usuario)){ ?>
	
		<table class='table'>
		<th>CURP</th>
		<th>Nombre</th>
		<th>Sexo</th>
		<th>Grado</th>
		<th>Grupo</th>
		<th></th>
	<?php
	
		echo '<tr>';
		echo '<td>'.$usuario['Alumno']['curp'].'</td>';
		echo '<td>'.$usuario['Alumno']['nombre'].' '.$usuario['Alumno']['apellidopat'].' '.$usuario['Alumno']['apellidomat'].'</td>';
		echo '<td>'.$usuario['Alumno']['sexo'].'</td>';
		echo '<td><center>'.$usuario['Alumno']['grado'].'</center></td>';
		echo '<td><center>'.$usuario['Grupo']['grupo'].'</center></td>';
		if($usuario['Alumno']['tutor_id'] != null){
			echo '<td>El Alumno ya tiene un tutor asignado</td>';
		}
		else{
			echo '<td>'.$this->Html->link("Vincular", array('controller' =>'alumnos','action'=> 'vincular/'.$usuario['Alumno']['curp']),array('class'=>'btn btn-primary btn-sm')).'</center></td>';
		}
		echo '</tr>';
	?>
	</table>
	
	<?php 
	}
	
	else echo '<center><h3>No existe ningun alumno con esa curp</h3></center>';
	
	?>
	</div>
</div>
</div>
	
	