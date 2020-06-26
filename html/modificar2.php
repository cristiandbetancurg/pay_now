<?php 
include ("conexion.php");
$estado = $_POST["estado"];
$npedido = $_POST["npedido"];

require_once'conexion.php';

$query="UPDATE creadas SET estado='$estado' WHERE npedido='$npedido' ";

        if ( $db->query($query) ) {
            echo "<script> alert('Usted ha cambiado el estado del pedido, por favor ejecute el delivery');
                        location.href = 'dashboard.php';
                        </script>";
        } else {

            echo "Error al Registrar, vuevla a intentarlo".mysqli_error($db);	

        }
?>