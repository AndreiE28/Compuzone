<?php
include 'connect.php';

$sql = "SELECT nume, email, tip_feedback, subiect, mesaj FROM fb";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Nume</th><th>Email</th><th>Tip Feedback</th><th>Subiect</th><th>Mesaj</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["nume"] . "</td><td>" . $row["email"] . "</td><td>" . $row["tip_feedback"] . "</td><td>" . $row["subiect"] . "</td><td>" . $row["mesaj"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nu există feedback.";
}

mysqli_close($conn);
?>