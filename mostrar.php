<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'conexion.php';

    $sql= "SELECT * FROM libros;";
    $resultado= $conn->query($sql);
    ?>
    <div>
        <h1 class="cabecera" >Mostrar Registros</h1>
    </div>
    <div calss="contenedor">
        <button class="crear"><a href="index.php">Agregar Nuevo Registro</a></button>

        <table class = "tabla_datos">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>autor</th>
                    <th>precio</th>
                    <th>disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $fila['nombre']?></td>
                        <td><?php echo $fila['autor']?></td>
                        <td><?php echo $fila['precio']?></td>
                        <td><?php echo $fila['disponible']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>