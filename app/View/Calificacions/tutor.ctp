<div class="row">       
<center>
<h2>Caificaciones del Alumno <?php echo $alumno['Alumno']['nombre'].' '.$alumno['Alumno']['apellidopat'].' '.$alumno['Alumno']['apellidomat']?></h2>
</center>

<br><br>

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
	echo '<td><h3><center>'.round($promedio,1).'</center></h3></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
			echo "<h4><center>Las calificaciones para este bimestre aun<br>no se encuentran registradas</center></h4><br><br>";
			echo '</table>';
	} ?>
	

<center><h3>Segundo Bimestre</h3></center>
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
	echo '<td><h3><center>'.round($promedio,1).'</center></h3></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
			echo "<h4><center>Las calificaciones para este bimestre aun<br>no se encuentran registradas</center></h4><br><br>";
			echo '</table>';
	} ?>

<center><h3>Tercer Bimestre</h3></center>
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
	echo '<td><h3><center>'.round($promedio,1).'</center></h3></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
			echo "<h4><center>Las calificaciones para este bimestre aun<br>no se encuentran registradas</center></h4><br><br>";
			echo '</table>';
	} ?>
	
<center><h3>Cuarto Bimestre</h3></center>
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
	echo '<td><h3><center>'.round($promedio,1).'</center></h3></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
			echo "<h4><center>Las calificaciones para este bimestre aun<br>no se encuentran registradas</center></h4><br><br>";
			echo '</table>';
	} ?>
	
<center><h3>Quinto Bimestre</h3></center>

<table>
<th>Materia</th>
<th><center>Calificacion</center></th>
<?php echo $this->Form->create('Calificacion');
  $con = 0;
  $bimestre = 5;
  $sumatoria = 0;

  if($calif_5) {  
  echo '<tr>';
	  foreach ($calif_5 as $cal){
			$sumatoria = $sumatoria + $cal['Calificacion']['calificacion'];
			
			echo '<td>'.$materias[$con]['Materia']['nombre'].'</td>';
			echo '<td><center>'.$cal['Calificacion']['calificacion'].'</center></td>';
						$con++;
			 echo '</tr>';
			 
	  }
	$promedio = $sumatoria/$con;
	echo '<tr>';
	echo '<td><h3><b>Promedio</b></h3></td>';
	echo '<td><h3><center>'.round($promedio,1).'</center></h3></td>';
	echo '</tr>';
	echo '</table>';
	  
  }

  else {
			echo "<h4><center>Las calificaciones para este bimestre aun<br>no se encuentran registradas</center></h4><br><br>";
			echo '</table>';
	} ?>
</div>
