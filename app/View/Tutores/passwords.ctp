<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Tutores Registrados</h2>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>

<div class="col-lg-2">
</div>
<div class="col-lg-2"><h3>Correo</h3><br></div>
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
</div>
	
		<table class='table'>
		
		<th>Correo</th>
		<th>Contraseña</th>
	
		
	<?php
	foreach ($tutores as $tutor){
		echo '<tr>';
		echo '<td>'.$tutor['User']['username'].'</td>';
		echo '<td>'.$tutor['User']['primer_password'].'</td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	