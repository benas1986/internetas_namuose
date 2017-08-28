<?php //jeigu sukuriamas failas tik su php tada nereikia uzdaryti php

$serveris = "localhost";
$duomenu_baze = "straipsniudb";
$vartotojas  = "root";
$slaptazodis = "";

// Create connection
$prisijungimas = new mysqli($serveris, $vartotojas, $slaptazodis, $duomenu_baze);

// Check connection
if ($prisijungimas->connect_error) {
    die("Prisijungti nepavyko: " . $prisijungimas->connect_error);
} 
//echo "Prisijungti pavyko";

