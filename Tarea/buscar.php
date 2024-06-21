<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    $buscar = $_POST['buscar'];
    ?>
    <div>
        <form action="" method="post" align="center">
            <input type="text" name="buscar" id="" value="<?=$buscar?>">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table border="1" class="personalizado">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Codigo</td>
                <td>Opciones</td>
            </tr>
            <?php
                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost", "root", "", "dbprueba");
                $sql = "SELECT id, nombre, tipo, codigo FROM talumno WHERE nombre like '$buscar' '%' or tipo like '$buscar' '%' order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        nombre=<?php echo $mostrar['1'] ?> &
                        tipo=<?php echo $mostrar['2'] ?> &
                        codigo=<?php echo $mostrar['3'] ?>
                        ">Editar</a>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>