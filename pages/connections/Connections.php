<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$bd = "tiendamatis";

$connection = mysqli_connect(
    $server, 
    $user, 
    $password, 
    $bd
)OR DIE ("ERROR en la conexión en la base de datos".mysqli_connect_error());




