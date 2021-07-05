<?php
include("../pages/connections/Connections.php");

function validar_cat_prod($cat,$prod,$connection){
    $query = "SELECT
        categoriaproducto.idCategoria
    FROM
        categoriaproducto
    WHERE
        categoriaproducto.idCategoria =".$cat."  AND
        categoriaproducto.codigoDeBarras =". $prod;
    $resultado = mysqli_query($connection,$query);
    if ($results = mysqli_fetch_array($resultado)){
        return 0;
    }else{
        return 1;
    }
    
}

function validar_productos($id,$connection){
    $query = "SELECT
        producto.codigoDeBarras
    FROM
        producto
    WHERE
        producto.codigoDeBarras ="."'$id'";
    $resultado = mysqli_query($connection,$query);
    if (mysqli_fetch_array($resultado)){
        return 0;
    }else{
        return 1;
    }
}
?>  