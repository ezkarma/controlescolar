<div class="row">
	       

<center><h2>Mensajes</h2></center>
<div class="col-lg-2"></div>
<div class="col-lg-2">	
<?php echo $this->Html->link("Nuevo Mensaje", array('controller' =>'mensajes','action'=> 'nuevo'));?>
<br><br><?php echo $this->Html->link("Inbox", array('controller' =>'mensajes','action'=> 'index'));?>
<br><?php echo $this->Html->link("Enviados", array('controller' =>'mensajes','action'=> 'enviados'));?>



</div>
	

<div class="col-lg-6">	
<br>
<h4>De: <?php echo $mensaje['Mensaje']['remitente']?>
<br>
Para: <?php echo $mensaje['Mensaje']['recipiente']?>
</h4>
<br>
<h3>
<?php echo $mensaje['Mensaje']['mensaje']?>
</h3>
</div>


	
	