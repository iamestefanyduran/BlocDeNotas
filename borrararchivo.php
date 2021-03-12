<?php  
$elnombre=$_POST['elnombre'];
file_exists($elnombre.'.txt')or die ("no existe el archivo indicado");
unlink($elnombre.'.txt');
echo "TU ARCHIVO HA SIDO GUARDADO.";
?>
<a href="index.html"><button type="button">VOLVER</button></a>