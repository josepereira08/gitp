<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peticion</title>
</head>
<body>
	<style type="text/css">
		table {
		 border-collapse: collapse;
		 border-color: black;
		}
		#cancelar{
			background-color: red;
			color: white;

		}
	</style>
	<div><button id="enviar">Enviar</button></div><div id="cal"></div>	
	 <div>
	 	<table>
	 		<thead>
	 			<tr style="border-collapse: collapse;">
	 				<th>Id</th>
	 				<th>Cedula</th>
	 				<th>Nombre</th>
	 				<th>Apellido</th>
	 				<th>Telefono</th>
	 			</tr>
	 		</thead>
	 		<tbody id="contenido">
	 		</tbody>
	 	</table>
	</div>



<script src="jquery-3.5.0.min.js" type="text/javascript"></script>

<script type="text/javascript">


function peticion(){
	document.getElementById('cal').innerHTML = '<button id="cancelar">Cancelar</button>'; 

	

		var listar  = $.ajax({
	        type: "POST",
	        url: "consulta.php",  // your PHP generating ONLY the inner DIV code
	        data:   "showimages=100",
	        success: function(html){
	            $("#contenido").html(html);
	        }
	    });

			$('#cancelar').on('click', (function(listar){ 
		listar.abort();
    	})); 
		
		

	    
}
function listar(){
	var listar=peticion();
}

    
    $('#enviar').on('click', (function(){ 
    	listar();
    }));   
    
    


</script>

</body>
</html>