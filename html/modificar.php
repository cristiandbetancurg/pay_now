<?php 
include("conexion.php");
require_once 'conexion.php';

$estado  = $_POST["estado"];
$npedido = $_POST["npedido"];

// Verificar pedido
$query   = "SELECT estado FROM creadas WHERE npedido='$npedido' ";
$result = $db->query($query);
if(mysqli_num_rows($result) == 1) {
    // Sí existe el pedido
    $query   = "UPDATE creadas SET estado='$estado' WHERE npedido='$npedido' ";
    if ($db->query($query)) {
        echo "<script> alert('Usted ha cambiado el estado del pedido, por favor ejecute el delivery');
                        location.href = 'dashboard.php';
                        </script>";
    } else {
        echo "Error al Registrar, vuevla a intentarlo" . mysqli_error($db);
    }
} else {
    echo "<script> alert('El número de pedido que intenta ingresar no existe, por favor verifiquelo e intente de nuevo.');
    location.href = 'dashboard.php';
    </script>";
    // No existe el pedido
    // Aquí tu mensaje de error
}
?>