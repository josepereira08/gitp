<?php


include ('conectar.php');

$consulta=mysqli_query($conectar,"SELECT * FROM persona");

foreach ($consulta as $i) {

    echo "<tr>
	 		<th>$i[id]</th>
	 		<th>$i[cedula]</th>
	 		<th>$i[nombre]</th>
	 		<th>$i[apellido]</th>
	 		<th>$i[telefono]</th>
	 	</tr>";
}


?>