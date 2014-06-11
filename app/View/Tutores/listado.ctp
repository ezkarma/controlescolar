<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Tutores</h2>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Tutores Registrados", array('controller' =>'tutores','action'=> 'passwords'),array('class'=>'btn btn-warning btn-lg')).'</center>';
?>
</div>

<div class="col-lg-4">
<?php
echo '<br><center>'.$this->Html->link("Agregar Tutor", array('controller' =>'users','action'=> 'agregar_tutor'),array('class'=>'btn btn-primary btn-lg')).'</center>';
echo '<br>';
?>
</div>
	
		<table class='table'>
		<th>Nombre</th>
		<th>Direccion</th>
		<th>Telefono</th>
		<th>Correo</th>
		<th></th>
	<?php
	foreach ($usuarios as $usuario){
		echo '<tr>';
		echo '<td>'.$usuario['Tutor']['nombre'].' '.$usuario['Tutor']['apellidopat'].' '.$usuario['Tutor']['apellidomat'].'</td>';
		echo '<td>'.$usuario['Tutor']['direccion'].'</td>';
		echo '<td>'.$usuario['Tutor']['telefono'].'</td>';
		echo '<td>'.$usuario['Tutor']['correo'].'</td>';
		echo '<td>'.$this->Html->link("+", array('controller' =>'users','action'=> 'asignacion/'.$usuario['Tutor']['id']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	