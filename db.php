<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fracaso1-2020";
$port = "3308";

$cnx = mysqli_connect($host, $user, $pass, $db, $port) or die("No se pudo establecer la conexion");

if (mysqli_connect_errno()) {
    echo "la conexion con mysql fallo " . mysqli_connect_error();
} else {
    echo "conexion exitosa ";
}