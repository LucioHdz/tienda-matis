<script type="text/javascript">    
        var respuesta = confirm("¿Deseas eliminar el proveedor?");
        if(respuesta==true){
            <?php
            include("connections/Connections.php");
            $identificadorProveedor= $_GET['idenProveedor'];
            $query="DELETE FROM proveedor WHERE idProveedor=$identificadorProveedor";
            mysqli_query($connection,$query);
            echo "<script >swal('Proveedor eliminado','presiona ok','success')</script>";
            ?>
        }else{
            <?php
            include("connections/Connections.php");
            echo "<script >swal('No se pudo eliminar el proveedor',
                'presiona ok','error')</script>";
            ?>
        }
</script>