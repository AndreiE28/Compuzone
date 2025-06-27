<?php
include 'connect.php'; // Include fișierul de conexiune

$sql = "SELECT email FROM nl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>email</th></tr>"";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nu există feedback.";
}

mysqli_close($conn);
?>