<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Alumnos</h2>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-2"><h3>Matricula</h3><br></div>
<div class="col-lg-4">	
<?php
echo $this->Form->create('UserBusqueda', array(
   'inputDefaults' => array(
        'label' => false,
        'div' => false
    )
));
echo '<br>';
echo $this->Form->input('username',array('type' => 'textbox','class'=>'form-control'));
?>
</div>

<div class="col-lg-4">	
<?php
echo '<br>';
echo $this->Form->submit('Buscar',array('class' => 'btn btn-success')); 
?>
</div>

<div class="col-lg-2">
<?php
echo '<br><center>'.$this->Html->link("Agregar Tutor", array('controller' =>'users','action'=> 'agregar_tutor'),array('class'=>'btn btn-primary btn-lg')).'</center>';
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
	
	