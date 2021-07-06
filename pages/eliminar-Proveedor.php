<?php
    include("connections/Connections.php");
    $identificadorProveedor= $_GET['idenProveedor'];

    $query="DELETE FROM proveedor WHERE idProveedor=$identificadorProveedor";
    
    if($resultado=mysqli_query($connection,$query)){
        echo"<script type='text/javascript'>
            alert('Proveedor eliminado');
            window.location.href='./verproveedores.php';
        </script>";
    }else{
        echo"<script type='text/javascript'>
            alert('Error al eliminar proveedor');
            window.location.href='./verproveedores.php';
        </script>";
    }
?>


