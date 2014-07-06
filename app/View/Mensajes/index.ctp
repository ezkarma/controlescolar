<div class="row">
	       

<center><h2>Mensajes Recibidos</h2></center>
<div class="col-lg-2"></div>
<div class="col-lg-2">	
<?php echo $this->Html->link("Nuevo Mensaje", array('controller' =>'mensajes','action'=> 'nuevo'));?>
<br><br>Inbox
<br><?php echo $this->Html->link("Enviados", array('controller' =>'mensajes','action'=> 'enviados'));?>
<br><br><?php echo $this->Html->link("Publicar Aviso", array('controller' =>'mensajes','action'=> 'aviso'));?>

</div>
	

<div class="col-lg-6">	
<table class='table'>
		<th width='30%'></th>
		<th></th>
		<th width='26%'></th>
		<?php
	foreach ($mensajes as $mensaje){
		echo '<tr>';
		
		$vista_previa = substr($mensaje['Mensaje']['mensaje'],0,32);
		
		if($mensaje['Mensaje']['visto'] == false){
			echo '<td><b><font color = 428bca>'.$mensaje['Mensaje']['remitente'].'</font></b></td>';
			echo '<td>'.$this->Html->link($vista_previa.'...', array('controller' =>'mensajes','action'=> 'ver/'.$mensaje['Mensaje']['id']),array('escape' => false)).'</font></td>';
		}		
		else {
			echo '<td>'.$mensaje['Mensaje']['remitente'].'</td>';
			$title = $this->Html->tag('span', $vista_previa.'...', array('style' => 'color:black'));
			echo '<td>'.$this->Html->link($title, array('controller' =>'mensajes','action'=> 'ver/'.$mensaje['Mensaje']['id']),array('escape' => false)).'</font></td>';
		}
		echo '<td>'.$mensaje['Mensaje']['fecha'].'</td>';
		echo '</tr>';
	}
	?>
	</table>

</div>


	
	