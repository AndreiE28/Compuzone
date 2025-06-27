<?php
$host = "info.tm.edu.ro";
$user = "aemandi";
$pass = "123144";
$dbname = "aemandi";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Conexiunea a eșuat: " . mysqli_connect_error());
}
?>