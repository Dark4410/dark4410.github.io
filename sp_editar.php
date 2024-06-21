<?php
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $codigo = $_POST['codigo'];

    $cnx = mysqli_connect("localhost", "root", "", "dbprueba");
    $sql = "UPDATE talumno SET nombre = '$nombre', tipo='$tipo', codigo='$codigo' WHERE id like $id";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Actualizo!";
    }
    else {
        header("Location: index.php");
    }
?>