<?php
include 'connect.php';

$sql_total = "SELECT COUNT(*) as total FROM fb";
$result_total = mysqli_query($conn, $sql_total);
$total = mysqli_fetch_assoc($result_total)['total'];

$imbunatatire_count = mysqli_fetch_assoc(mysqli_query($conn, 
    "SELECT COUNT(*) as count FROM fb WHERE tip_feedback = 'Îmbunătățire'"))['count'];

$reparare_count = mysqli_fetch_assoc(mysqli_query($conn, 
    "SELECT COUNT(*) as count FROM fb WHERE tip_feedback = 'Reparare'"))['count'];

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<body>
		<p style="font-size:15px">Număr feedback-uri: <?php echo "$total<br>"; ?></p>
		<ul>
			<li><p style="font-size:14px">Îmbunătățire: <?php echo "$imbunatatire_count<br>"; ?></p></li>
			<li><p style="font-size:14px">Reparare: <?php echo "$reparare_count<br>"; ?></p></li>
		</ul>
	</body>
</html>