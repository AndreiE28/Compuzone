<?php
// Conectare la baza de date MariaDB (Procedural)
$host = "info.tm.edu.ro";  // Sau IP-ul serverului
$user = "aemandi";       // Utilizatorul bazei de date
$pass = "123144";           // Parola bazei de date
$dbname = "aemandi";   // Numele bazei de date (acelasi cu numele utilizatorului

// Creare conexiune $conn ( un file handler ca "fin">> din C++ )
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verificare conexiune
if (!$conn) {
    die("Conexiunea a eșuat: " . mysqli_connect_error());
}
?>