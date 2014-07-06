<div class="row">       
<center>
<h2>Modificar Calificaciones del Alumno <?php echo $alumno['Alumno']['nombre'].' '.$alumno['Alumno']['apellidopat'].' '.$alumno['Alumno']['apellidomat']?> para el Bimestre</h2>
</center>

<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>


<div class="col-lg-4"></div>
<div class="col-lg-4">
<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;

    		foreach ($materias as $materia){    
			echo '<tr>';
			echo '<td>'.$materia['Materia']['nombre'].'</td>';
			echo '<td>'.$this->Form->input('Calificacion.'.$con.'.calificacion',array('type'=>'textbox','label'=>false)).'</td>';
			echo $this->Form->input('Calificacion.'.$con.'.bimestre',array('type'=>'hidden','value'=>$bimestre));
			echo $this->Form->input('Calificacion.'.$con.'.alumno_id',array('type'=>'hidden','value'=>$alumno['Alumno']['id']));
			echo $this->Form->input('Calificacion.'.$con.'.materia_id',array('type'=>'hidden','value'=>$materia['Materia']['id']));
			echo $this->Form->input('Calificacion.'.$con.'.grado',array('type'=>'hidden','value'=>$materia['Materia']['grado']));
			echo '</tr>';
			
			$con++;
			}      
		echo '</table>';
		echo $this->Form->end(__('Guardar')); 
	?>
	
</div>
<div class="col-lg-2">

</div>
</div>
</div>
</div>
	