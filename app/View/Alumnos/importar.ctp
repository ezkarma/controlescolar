

<div class="row">
<center>
<div class="col-lg-2">	
</div>
<div class="col-lg-8">	
<br><br>
Por favor seleccione el archivo que contiene la lista de alumnos. El formato predeterminado es *.CVS.
<br><br>
<?php 
echo $this->Form->create('Document', array('enctype' => 'multipart/form-data'));
echo $this->Form->file('Document.submittedfile');
echo '<br>';
echo '<br>';
echo $this->Form->end('Cargar Lista');
echo '<br>';
echo '<br>';
?>
</div>
</center>
</div>
