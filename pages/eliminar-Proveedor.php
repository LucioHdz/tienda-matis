<?php
    include("conexion/conexion-maestra.php");
    $identificadorProveedor= $_GET['idenProveedor'];
    $sentencia="DELETE FROM proveedor WHERE idProveedor=$identificadorProveedor";

    if(mysqli_query($conexion,$sentencia)){
        header('location:verproveedores.php');
    }else{
        echo 'ERROR AL ELIMINAR PROVEEDOR';
    }

    mysqli_close($conexion);
?>