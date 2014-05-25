<center>
<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Form->create('Materia'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Materia'); ?></legend>
		
        <?php
		echo $this->Form->input('nombre', array('label' => 'nombre'));
		echo $this->Form->input('grado', array('label' => 'Grado'));
		echo $this->Form->input('profesor', array('label' => 'Profesor'));
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
</center>