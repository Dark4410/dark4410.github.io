<?php
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $codigo = $_POST['codigo'];

    $cnx = mysqli_connect("localhost", "root", "", "dbprueba");
    $sql = "INSERT INTO talumno(nombre, tipo, codigo) VALUES('$nombre', '$tipo', '$codigo')";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Inserto!";
    }
    else {
        header("Location: index.php");
    }
?>