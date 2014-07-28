<center>
<div>
<?php echo $this->Form->create('Alumno'); ?>
    <fieldset>
        <legend><?php echo __('Modificar Datos del Alumno'); ?></legend>
		<form class="form-horizontal">
		<div class="form-group">
        <?php 
		echo '<div class="col-lg-4">';
		echo '</div>';
		echo '<div class="col-lg-4">';
		echo $this->Form->input('curp',array('type' => 'textbox','value'=>$alumno['Alumno']['curp'],'class'=>'form-control'));
		echo '<br>';
		echo $this->Form->input('nombre',array('value' => $alumno['Alumno']['nombre'],'class'=>'form-control'));
		echo '<br>';
		echo $this->Form->input('apellidopat', array('label' => 'Apellido Paterno ','value'=>$alumno['Alumno']['apellidopat'],'class'=>'form-control control-label'));
		echo '<br>';
		echo $this->Form->input('apellidomat', array('label' => 'Apellido Materno ','value'=>$alumno['Alumno']['apellidomat'],'class'=>'form-control'));
		echo '<br>';
		echo '</div>';
		echo '<br>';
		//echo $this->Form->input('sexo',array('label' => 'Sexo','options'=>array('H'=>'H','M'=>'M'),'value'=>$alumno['Alumno']['sexo']));
        //echo $this->Form->input('grupo_id');
      ?>
	  </div>
	
    </fieldset>
	<br>
<?php echo $this->Form->submit('Guardar',array('class'=>'btn btn-success ')); ?>
</form>
<br><br>
</div>
</center>