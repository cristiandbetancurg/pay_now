<?php 
include("conexion.php");
require_once 'conexion.php';

$npedido = $_POST["npedido"];


$query   = "SELECT 'npedido' FROM creadas WHERE npedido='$npedido' ";
$result = $db->query($query);
if(mysqli_num_rows($result) == 1) {
    // Sí existe el pedido    
    echo "Hola y gracias";    
    

    if ($db->query($query)) {
        echo "<script> alert('Usted ha cambiado el estado del pedido, por favor ejecute el delivery');
                        location.href = 'delivery.php';
                        </script>";
    } else {
        echo "Error al Registrar, vuevla a intentarlo" . mysqli_error($db);
    }
} else {
    echo "<script> alert('El número de pedido que intenta ingresar no existe, por favor verifiquelo e intente de nuevo.');
    location.href = 'dashboard.php';
    </script>";
    // No existe el pedido

}

?>