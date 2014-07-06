<div class="row">
	       

<center><h2>Mensajes</h2></center>
<div class="col-lg-2"></div>
<div class="col-lg-2">	
<?php echo $this->Html->link("Inbox", array('controller' =>'mensajes','action'=> 'index'));?>
<br>Enviados


</div>
	

<div class="col-lg-6">	
<?php echo $this->Form->create('Mensaje'); 

		echo $this->Form->input('recipiente',array('type'=>'hidden','label'=>'Para:','value'=>$recipiente));
		echo $this->Form->input('Para',array('disabled'=>'true','value'=>$recipiente));
		echo $this->Form->input('remitente',array('type'=>'hidden','value'=>$usuario['username']));
		echo $this->Form->input('mensaje',array('label'=>false,'autofocus'=>'autofocus'));
		echo $this->Form->input('tipo',array('value'=>1,'type'=>'hidden'));
		echo $this->Form->input('fecha',array('type'=>'hidden'));

   
		echo $this->Form->end(__('Enviar')); ?>
</div>


	
	