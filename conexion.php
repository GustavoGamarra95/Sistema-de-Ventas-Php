<?php
$_SERVER = "localhost";
$user = "root";
$pass = "";
$bd = "test";

$conec = new mysqli($_SERVER, $user, $pass, $bd);

if ($conec->connect_error) {
    die("Conexion Fallida". $conec->connect_error);
}else{
    echo "conectado";
}
?>