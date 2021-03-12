<?php  
$Nombre=$_POST['nombre'];
$Texto=$_POST['texto'];

$miarchivo=fopen($Nombre.'.txt','a');//abrir archivo, nombre archivo, modo apertura
fwrite($miarchivo, // escribir
      "nombre: ".$Nombre. 
      " texto: ".$Texto);
echo "Tu archivo se ha guardado con el nombre: \"$Nombre.txt\"";
fclose($miarchivo); //cerrar archivo
?>
<br> 
<br>
<a href="index.html"><button type="button">CREAR OTRO ARCHIVO</button></a>
<br>
<br>
<a href="index1.html"><button type="button">VER EL ARCHIVO</button></a>
<br>
<br>
<a href="index2.html"><button type="button">BORRAR ARCHIVO</button></a>