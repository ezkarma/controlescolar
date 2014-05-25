<center>
<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Form->create('Alumno'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Alumno'); ?></legend>
		
        <?php 
		echo $this->Form->input('curp',array('type'=>'textbox'));
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidopat', array('label' => 'Apellido Paterno'));
		echo $this->Form->input('apellidomat', array('label' => 'Apellido Materno'));
		echo $this->Form->input('sexo',array('label' => 'Sexo'));
        echo $this->Form->input('grado');
        echo $this->Form->input('promediogeneral',array('label' => 'Promedio General'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
</center>