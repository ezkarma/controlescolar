<div class="row">
	       

<center><h2>Mensajes Enviados</h2></center>
<div class="col-lg-2"></div>
<div class="col-lg-2">	
<?php echo $this->Html->link("Nuevo Mensaje", array('controller' =>'mensajes','action'=> 'nuevo'));?>
<br><br><?php echo $this->Html->link("Inbox", array('controller' =>'mensajes','action'=> 'index'));?>
<br>Enviados


</div>
	

<div class="col-lg-6">	
<table class='table'>
		<th width='30%'></th>
		<th></th>
		<th width='26%'></th>
		<?php
	foreach ($mensajes as $mensaje){
	if($mensaje['Mensaje']['tipo'] == 1){
		echo '<tr>';
		echo '<td>'.$mensaje['Mensaje']['recipiente'].'</td>';
		$vista_previa = substr($mensaje['Mensaje']['mensaje'],0,32);
		echo '<td>'.$this->Html->link($vista_previa.'...', array('controller' =>'mensajes','action'=> 'ver/'.$mensaje['Mensaje']['id'])).'</td>';
		echo '<td>'.$mensaje['Mensaje']['fecha'].'</td>';
		echo '</tr>';
		}
	}
	?>
	</table>

</div>


	
	