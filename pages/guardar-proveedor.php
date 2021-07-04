<?php
    include("connections/Connections.php");

    $nombreProveedor= $_POST['txtNombre'];
    $contactoProveedor= $_POST['txtContacto'];

    $sentencia="INSERT proveedor VALUES(DEFAULT,UPPER(TRIM('$nombreProveedor')),UPPER(TRIM('$contactoProveedor')))";

    if(mysqli_query($connection,$sentencia)){
        header('location:agregarproveedores.php');
    }else{
        echo"ERROR AL GUARDAR PROVEEDOR";
        /*$var = "EL PROVEEDOR YA EXISTE";
        echo "<script> alert('".$var."'); </script>";*/
    }
    mysqli_close($conexion);
?>