


<center>

<?php 
$filename = $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/files/horarios/' . $grupo_nombre.'.jpg';
if (file_exists($filename)){
echo '<img src="../../../app/webroot/files/horarios/'.$grupo_nombre.'.jpg">';
$boton = 'Modificar';
}
else {
echo '<h3>Aun no se ha asignado ningun horario a este grupo</h3>';
$boton = 'Guardar';
}
?>

<br>

<?php 
echo $this->Form->create('Document', array('enctype' => 'multipart/form-data'));
echo $this->Form->file('Document.submittedfile');
echo $this->Form->end($boton);
?>
</center>
