<?php
include 'connect.php'; // Include fișierul de conexiune

// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; //prenume

    // Pregătește interogarea SQL pentru inserare; insert into elevi
    $sql = "INSERT INTO nl (email) VALUES ('$email')";

    if (mysqli_query($conn, $sql)) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Redirecționează utilizatorul înapoi la formular
   // header("Location: ../index.html");
   // exit();
}

mysqli_close($conn);
?>