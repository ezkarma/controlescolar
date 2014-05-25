<center>
<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Form->create('Grupo'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Grupo'); ?></legend>
		
        <?php
		echo $this->Form->input('grado', array('label' => 'Grado'));
		echo $this->Form->input('grupo', array('label' => 'Grupo'));
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
</center>