<div class="container" style="width:30%;height:300px">
    <div class="row">
        <div class="span3 centred">
         
		 <center><h2>Mi Perfil</h2><center>
		 <br>
		 
		 <table class='table'>
		<?php if($user['rol'] != 'admin'){ ?>
		<tr><td><?php echo '<strong>Correo:</strong> '.$usuario_registrado['Tutor']['correo']; ?></td></tr>
		<tr><td><?php echo '<strong>Nombre:</strong> '.$usuario_registrado['Tutor']['nombre'].' '.$usuario_registrado['Tutor']['apellidopat'].' '.$usuario_registrado['Tutor']['apellidomat']; ?></td></tr>
		<tr><td><?php echo '<strong>Contraseña: </strong> '.$this->Html->link('Modificar',array('controller' => 'Users', 'action' => 'Password')); ?></td></tr>
		<?php } else echo '<tr><td><strong>Contraseña: </strong> '.$this->Html->link('Modificar',array('controller' => 'Users', 'action' => 'Password')).'</td></tr>'; ?>
		
		
		</table>	

	 </div>
    </div>
</div>