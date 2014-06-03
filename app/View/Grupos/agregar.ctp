<center>
<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Form->create('Grupo'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Grupo'); ?></legend>
		
        <?php
		echo $this->Form->input('grado', array('label' => 'Grado','type'=>'select','options'=>array('1'=>1,'2'=>2,'3'=>3)));
		echo $this->Form->input('grupo', array('label' => 'Grupo','type'=>'select','options'=>array('A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E')));
		
	 ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
</center>