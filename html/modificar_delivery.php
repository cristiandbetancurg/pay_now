<?php 
include("conexion.php");
require_once 'conexion.php';

//$estado  = $_POST["estado"];
$npedido = $_POST["npedido"];
$conductor = $_POST["conductor"];
$placa_modelo = $_POST["placa_modelo"];
$franja_horaria = $_POST["franja_horaria"];
$estadod = $_POST["estadod"];


// Verificar pedido
$query   = "SELECT * FROM creadas WHERE npedido='$npedido' ";
$result = $db->query($query);
if(mysqli_num_rows($result) == 1) {
    // Sí existe el pedido
    //$query = " INSERT INTO creadas(conductor,placa_modelo,franja_horaria,estadod) VALUES ('$conductor','$placa_modelo','$franja_horaria','$estadod')";
    //$query   = "UPDATE creadas SET conductor='$conductor', placa_modelo='$placa_modelo', franja_horaria='$franja_horaria', estado_delivery	='$estado_delivery' WHERE npedido='$npedido' ";
    $query   = "UPDATE creadas SET conductor='$conductor' WHERE npedido='$npedido' ";
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
    // Aquí tu mensaje de error
}
?>