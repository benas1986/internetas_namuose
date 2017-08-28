<?php

require_once("duombaze.php");

$id = $_GET['id'];
$data = date("Y-m-d H:i:s");
$vardas = $_POST['vardasLaukelis'];
$tekstas = $_POST['tekstasLaukelis'];

$uzklausa = "INSERT INTO komentarai (straipsnioID, data, vardas, tekstas) VALUES ($id, '$data', '$vardas', '$tekstas');";
mysqli_query($prisijungimas, $uzklausa);
header('Location: straipsniai.php');
exit();