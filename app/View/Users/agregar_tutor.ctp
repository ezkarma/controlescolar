<center>
<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Form->create('Tutor'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Tutor'); ?></legend>
		
        <?php 
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidopat', array('label' => 'Apellido Paterno'));
		echo $this->Form->input('apellidomat', array('label' => 'Apellido Materno'));
		echo $this->Form->input('direccion', array('label' => 'Direccion'));
		echo $this->Form->input('telefono', array('label' => 'Telefono'));
		echo $this->Form->input('correo', array('label' => 'Correo'));
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
</center>