<?php
      include 'conexion.php';

    $id = $_REQUEST['Id'];
    $sql = "DELETE FROM libros WHERE id_libro ='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:mostrar.php");
    }

?>