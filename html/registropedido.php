<?php

	$npedido = $_POST["pedido"];
	$cedula = $_POST["cedula"];	
	$monto = $_POST["monto"];
	$banco = $_POST["banco"];
	$comentario = $_POST["comentario"];
	$estado = $_POST["estado"];

	

	require_once'conexion.php';
	 
	

	$query = " INSERT INTO creadas(npedido,cedula,monto,banco,comentario,estado) VALUES ('$npedido','$cedula','$monto','$banco','$comentario','$estado')";

				if ( $db->query($query) ) {
					echo "<script> alert('Pago resgistrado, usted puede verificar el estado de su pago y delivery en el menú principal...');
								location.href = 'mipago.php';
								</script>";
				} else {

					echo "Error al Registrar, vuevla a intentarlo".mysqli_error($db);	

				}

			
	  	
				