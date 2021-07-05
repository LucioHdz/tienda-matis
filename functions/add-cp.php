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
function validar_categoria($nomCatego,$connection){
    $query = "SELECT categoria.idCategoria,
                        categoria.nombre 
            FROM categoria 
            WHERE categoria.nombre= UPPER(TRIM('$nomCatego'))";
    $resultado = mysqli_query($connection,$query);

    if ($results = mysqli_fetch_array($resultado)){
        return 0;
    }else{
        return 1;
    }
}

?>  