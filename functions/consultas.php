<?php
include("../pages/connections/Connections.php");

function hacerConsulta($query,$connection){
    $resultado = mysqli_query($connection,$query);
    
    return mysqli_fetch_array($resultado);
}
