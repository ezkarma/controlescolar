<div class="row">
	       

<center><h2>Mensajes</h2></center>
<div class="col-lg-2"></div>
<div class="col-lg-2">	
<?php echo $this->Html->link("Nuevo Mensaje", array('controller' =>'mensajes','action'=> 'nuevo'));?>
<br><br><?php echo $this->Html->link("Inbox", array('controller' =>'mensajes','action'=> 'index'));?>
<br><?php echo $this->Html->link("Enviados", array('controller' =>'mensajes','action'=> 'enviados'));?>



</div>
	
<?php if($usuario['rol'] == 'tutor'){?>
<div class="col-lg-6">	
<br>
<h4>De: <?php echo $mensaje['Mensaje']['remitente']?>
<br><br>
Fecha: <?php echo $mensaje['Mensaje']['fecha']?>
<br><br>
Asunto: <?php echo $mensaje['Mensaje']['asunto']?>
</h4>
<h3>
<?php echo $mensaje['Mensaje']['mensaje']?>
</h3>
<?php }

else if($usuario['rol'] == 'admin'){ ?>
<div class="col-lg-4">
<?php foreach($mensajes as $mensaje){	?>
<br>
<h4>De: <?php echo $mensaje['Mensaje']['remitente']?>
<br>
Tutor de:<?php echo $alumnos['Alumno']['nombre_completo'].' Grupo: '.$alumnos['Grupo']['nombre']?>
<br><br>
Fecha: <?php echo $mensaje['Mensaje']['fecha']?>
<br><br>
Asunto: <?php echo $mensaje['Mensaje']['asunto']?>
</h4>
<h3>
<?php echo $mensaje['Mensaje']['mensaje']?>
</h3>
<center> _______________________________________________________ </center>
<?php } echo '</div  class="col-lg-2">';
echo '<div>';
$icono = $this->Html->tag('span', ' ', array('class'=>'glyphicon glyphicon-share-alt'));
echo '<br>'.$this->Html->link($icono." Responder", array('controller' =>'mensajes','action'=> 'mensaje/'.$mensaje['Mensaje']['remitente']),array('class'=>'btn btn-success btn','escape'=>false));

echo '</div>';
}  ?>




	
	