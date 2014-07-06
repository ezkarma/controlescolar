<div class="row">
	<div class="col-lg-4">	
	</div>
		<div class="col-lg-4">	        

<center><h2>Listado de Grupos</h2></center>
<style type="text/css">
div.inline { float:left; }
.clearBoth { clear:both; }
</style>


<?php
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-list'));
echo '<br><center>'.$this->Html->link($icono." Registrar Grupo", array('controller' =>'grupos','action'=> 'agregar'),array('class'=>'btn btn-primary btn-lg','escape'=>false)).'</center>';
?>
<br>


		<table class='table'>
		<th>Grado</th>
		<th>Grupo</th>
		<th></th>
	<?php
	foreach ($grupos as $grupo){
		echo '<tr>';
		echo '<td>'.$grupo['Grupo']['grado'].'</td>';
		echo '<td>'.$grupo['Grupo']['grupo'].'</td>';
		echo '<td>'.$this->Html->link("Detalles", array('controller' =>'grupos','action'=> 'alumnos/'.$grupo['Grupo']['id']),array('class'=>'btn btn-warning btn-sm')).'</center></td>';
		echo '</tr>';
	}
	?>
	</table>
	</div>
</div>
</div>
	
	