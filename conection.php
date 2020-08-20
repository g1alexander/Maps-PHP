<?php 

$localhost = "localhost";
$root = "root";
$password = "admin";
$db = "maps_php";

$connection=mysqli_connect ($localhost, $root, $password, $db);
if (!$connection) {
  die('no hay coneccion con el servidor : ' . mysqli_error());
}

?>