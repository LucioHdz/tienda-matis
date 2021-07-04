<?php
    include("connections/Connections.php");

    $codigoBarras= $_POST['txtCodigoBarras'];
    $nombreProducto= $_POST['txtNombre'];
    $proveedor= $_POST['cmbProveedor'];
    $precioCompra= $_POST['txtPrecioCompra'];
    $precioVenta= $_POST['txtPrecioVenta'];
    $stock= $_POST['txtStock'];
    $status= $_POST['cmbStatus'];

    $sentencia="INSERT producto VALUES(UPPER(TRIM('$codigoBarras')),
                                        UPPER(TRIM('$nombreProducto')),
                                        $proveedor,
                                        $precioCompra,
                                        $precioVenta,
                                        $stock,
                                        $status)";

    if(mysqli_query($connection,$sentencia)){
        header('location:index.php');
    }else{
        $var = "EL PRODUCTO YA EXISTE";
        echo "<script> alert('".$var."'); </script>";
    }
    mysqli_close($conexion);
?>