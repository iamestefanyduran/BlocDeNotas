<?php  
$elnombre=$_POST['elnombre'];
file_exists($elnombre.'.txt') //comprobar
            or die ("Error: no existe el archivo corespondiente a esta clave");
$miarchivo=fopen($elnombre.'.txt','r'); //abrir archivo
$ver = fgets($miarchivo); //leer archivo
fclose($miarchivo); //cerrar archivo
echo $ver;
?>

<a href="index.html"><button type="button">VOLVER</button></a>