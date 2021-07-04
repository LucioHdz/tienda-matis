<?php
    include("connections/Connections.php");
    $identificadorProveedor= $_GET['idenProveedor'];
    $sentencia="DELETE FROM proveedor WHERE idProveedor=$identificadorProveedor";

    if(mysqli_query($connection,$sentencia)){
        header('location:verproveedores.php');
    }else{
        echo 'ERROR AL ELIMINAR PROVEEDOR';
    }

    mysqli_close($conexion);
?>