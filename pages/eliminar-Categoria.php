<?php
    include("connections/Connections.php");
    $identificadorCat= $_GET['idenCat'];

    $query="DELETE FROM categoria WHERE idCategoria=$identificadorCat";
    
    if($resultado=mysqli_query($connection,$query)){
        echo"<script type='text/javascript'>
            alert('Categoria eliminada');
            window.location.href='./vercategoria.php';
        </script>";
    }else{
        echo"<script type='text/javascript'>
            alert('Error al eliminar categoria');
            window.location.href='./vercategoria.php';
        </script>";
    }
?>