<?php

require_once 'db.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$observaciones = $_POST['observaciones'];

// print("$nombres, $apellidos, $email, $departamento, $ciudad, $observaciones");

$query = "INSERT INTO usuarios(nombres, apellidos, email, departamento, ciudad, observaciones) VALUES ('$nombres', '$apellidos', '$email', '$departamento', '$ciudad', '$observaciones');";

if (mysqli_query($cnx, $query)) {
    echo "insercion exitosa!";
} else {
    echo "no se pudo hacer la insercion :( sorry";
}
