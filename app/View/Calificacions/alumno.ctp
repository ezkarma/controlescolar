<div class="row">       
<center>
<h2>Caificaciones del Alumno <?php echo $alumno['Alumno']['nombre'].' '.$alumno['Alumno']['apellidopat'].' '.$alumno['Alumno']['apellidomat']?></h2>
</center>

<center><h3>Primer Bimestre</h3></center>
<div class="col-lg-4"></div>
<div class="col-lg-4">
<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;
  $bimestre = 1;
  $sumatoria = 0;

  if($calif_1) {  
  echo '<tr>';
	  foreach ($calif_1 as $cal){
			$sumatoria = $sumatoria + $cal['Calificacion']['calificacion'];
			
			echo '<td>'.$materias[$con]['Materia']['nombre'].'</td>';
			echo '<td><center>'.$cal['Calificacion']['calificacion'].'</center></td>';
						$con++;
			 echo '</tr>';
			 
	  }
	$promedio = $sumatoria/$con;
	echo '<tr>';
	echo '<td><h3><b>Promedio</b></h3></td>';
	echo '<td><h3><center>'.$promedio.'</center></h3></td>';
	echo '</tr>';
	echo '<td></td>';
	echo '<td><center>'.$this->Html->link("Modificar", array('controller' =>'calificacions','action'=> 'modificar/'.$alumno['Alumno']['curp'].'/'.$bimestre),array('class'=>'btn btn-success')).'</center></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
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
	} ?>
	
</div>
<div class="col-lg-2">

</div>
</div>

<center><h3>Segundo Bimestre</h3></center>
<div class="col-lg-4"></div>
<div class="col-lg-4">
<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;
  $bimestre = 2;
  $sumatoria = 0;

  if($calif_2) {  
  echo '<tr>';
	  foreach ($calif_2 as $cal){
			$sumatoria = $sumatoria + $cal['Calificacion']['calificacion'];
			
			echo '<td>'.$materias[$con]['Materia']['nombre'].'</td>';
			echo '<td><center>'.$cal['Calificacion']['calificacion'].'</center></td>';
						$con++;
			 echo '</tr>';
			 
	  }
	$promedio = $sumatoria/$con;
	echo '<tr>';
	echo '<td><h3><b>Promedio</b></h3></td>';
	echo '<td><h3><center>'.$promedio.'</center></h3></td>';
	echo '</tr>';
	echo '<td></td>';
	echo '<td><center>'.$this->Html->link("Modificar", array('controller' =>'calificacions','action'=> 'modificar/'.$alumno['Alumno']['curp'].'/'.$bimestre),array('class'=>'btn btn-success')).'</center></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
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
	} ?>
	
</div>
<div class="col-lg-2">

</div>
</div>

<center><h3>Tercer Bimestre</h3></center>
<div class="col-lg-4"></div>
<div class="col-lg-4">
<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;
  $bimestre = 3;
  $sumatoria = 0;

  if($calif_3) {  
  echo '<tr>';
	  foreach ($calif_3 as $cal){
			$sumatoria = $sumatoria + $cal['Calificacion']['calificacion'];
			
			echo '<td>'.$materias[$con]['Materia']['nombre'].'</td>';
			echo '<td><center>'.$cal['Calificacion']['calificacion'].'</center></td>';
						$con++;
			 echo '</tr>';
			 
	  }
	$promedio = $sumatoria/$con;
	echo '<tr>';
	echo '<td><h3><b>Promedio</b></h3></td>';
	echo '<td><h3><center>'.$promedio.'</center></h3></td>';
	echo '</tr>';
	echo '<td></td>';
	echo '<td><center>'.$this->Html->link("Modificar", array('controller' =>'calificacions','action'=> 'modificar/'.$alumno['Alumno']['curp'].'/'.$bimestre),array('class'=>'btn btn-success')).'</center></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
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
	} ?>
	
</div>
<div class="col-lg-2">

</div>
</div>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br>

<center><h3>Cuarto Bimestre</h3></center>
<div class="col-lg-4"></div>
<div class="col-lg-4">
<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;
  $bimestre = 4;
  $sumatoria = 0;

  if($calif_4) {  
  echo '<tr>';
	  foreach ($calif_4 as $cal){
			$sumatoria = $sumatoria + $cal['Calificacion']['calificacion'];
			
			echo '<td>'.$materias[$con]['Materia']['nombre'].'</td>';
			echo '<td><center>'.$cal['Calificacion']['calificacion'].'</center></td>';
						$con++;
			 echo '</tr>';
			 
	  }
	$promedio = $sumatoria/$con;
	echo '<tr>';
	echo '<td><h3><b>Promedio</b></h3></td>';
	echo '<td><h3><center>'.$promedio.'</center></h3></td>';
	echo '</tr>';
	echo '<td></td>';
	echo '<td><center>'.$this->Html->link("Modificar", array('controller' =>'calificacions','action'=> 'modificar/'.$alumno['Alumno']['curp'].'/'.$bimestre),array('class'=>'btn btn-success')).'</center></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
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
	} ?>
	
</div>
<div class="col-lg-2">

</div>
</div>



</div>

