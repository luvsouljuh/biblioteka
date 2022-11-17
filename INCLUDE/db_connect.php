<?php
$servername = "localhost";
$username = "biblioteka";
$password = "biblioteka";
$database = "biblioteka";
$e = "błąd";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd:". mysqli_connect_error());

}
echo "Połączono z bazą danych.";
?>