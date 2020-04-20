<?php

include ('conectar.php');

for ($i = 198; $i <= 1000; $i++) {

$ci=rand(1000000, 99999999);
$tel=rand(1000000, 99999999);

    $insert=mysqli_query($conectar,"
	INSERT INTO persona 
		(id, cedula, nombre, apellido, telefono) 
	VALUES 
		(default, $ci, 'Nombre_$i', 'Apellido_$i', $tel)
	");
	if ($insert) {
		echo $i." - (Persona".$i.").<br>";
	}else{
		echo "----".$i."----";
	}
}



?>