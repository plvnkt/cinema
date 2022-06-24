<!-- plik łączacy się do bazy danych -->
<?php

$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="cinema";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}