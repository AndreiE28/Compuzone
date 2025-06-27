<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/rdesa/public_html/Site Atestat/vendor/autoload.php';
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $tip_feedback = $_POST['tip_feedback'];
    $subiect = $_POST['subiect'];
    $mesaj = $_POST['mesaj'];

    $sql = "INSERT INTO fb (nume, email, tip_feedback, subiect, mesaj) 
            VALUES ('$nume', '$email', '$tip_feedback', '$subiect', '$mesaj')";
    
    if (mysqli_query($conn, $sql)) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'help.compuzone@gmail.com';
            $mail->Password   = 'dckw ydee aemb vzpn';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
			
			$mail->Priority = 1;
			$mail->addCustomHeader('X-Mailer: CompuZone');
			$mail->addCustomHeader('X-Priority: 1');
			$mail->addCustomHeader('X-MSMail-Priority: High');
			$mail->addCustomHeader('Precedence: bulk');

            $mail->setFrom('help.compuzone@gmail.com', 'CompuZone Feedback');
            $mail->addAddress($email);
            $mail->Subject = "Feedback: $subiect";
            $mail->Body    = "
                <h3>Feedback-ul a fost trimis. Mulțumim!</h3>
                <p><strong>Tip feedback:</strong> $tip_feedback</p>
                <p><strong>Mesaj:</strong><br>" . nl2br($mesaj) . "</p>
				<p><strong>Dacă nu tu ai scris acest feedback pe site-ul CompuZone, ignoră acest email.</p>
            ";
			
            $mail->isHTML(true);

            $mail->send();
            echo "OK";
        } catch (Exception $e) {
            echo "Mesajul nu a fost trimis. Eroare: {$mail->ErrorInfo}";
        }
    } else {
        echo "Eroare bază de date: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>