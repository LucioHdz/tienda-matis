<?php
    $servidor='localhost:3310';
    $usuario='root';
    $contra='';
    $baseDatos='tiendamatis';

    $conexion=mysqli_connect($servidor,$usuario,$contra,$baseDatos) OR DIE ("NO SE REALIZO LA CONEXION CON EXITO". mysqli_connect_error());

?>