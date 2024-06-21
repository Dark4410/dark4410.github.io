<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];
    $codigo = $_GET['codigo'];
    ?>
    <div>
        <form action="sp_editar.php" method="post" align="center">
            <table border="1" class="personalizado">
                <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Tipo:</td>
                    <td><input type="text" name="tipo" id="" value="<?=$tipo?>"></td>
                </tr>
                <tr>
                    <td>Codigo:</td>
                    <td><input type="text" name="codigo" id="" value="<?=$codigo?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>