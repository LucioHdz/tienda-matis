<?php
include("connections/Connections.php");
$codigoDeBarras = $_GET['codBarras'];

$query = "DELETE FROM producto WHERE codigoDeBarras=$codigoDeBarras";

if ($resultado = mysqli_query($connection, $query)) {
    echo "<script type='text/javascript'>
            alert('Producto eliminado');
            window.location.href='./verproductos.php';
        </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Error al eliminar producto');
            window.location.href='./verproductos.php';
        </script>";
}
