<div class="row">
	<div class="col-lg-2">	
	</div>
		<div class="col-lg-8">	        

<h2>Listado de Grupos</h2>
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
echo '<br><center>'.$this->Html->link("Registrar Grupo", array('controller' =>'grupos','action'=> 'agregar'),array('class'=>'btn btn-primary btn-lg')).'</center>';
?>
</div>

		<table class='table'>
		<th>Grado</th>
		<th>Grupo</th>
		<th></th>
	<?php
	foreach ($grupos as $grupo){
		echo '<tr>';
		echo '<td>'.$grupo['Grupo']['grado'].'</td>';
		echo '<td>'.$grupo['Grupo']['grupo'].'</td>';
		echo '<td>'.$this->Html->link("+", array('controller' =>'grupos','action'=> 'alumnos/'.$grupo['Grupo']['id']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	