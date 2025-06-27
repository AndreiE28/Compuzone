<?php
/**
 * PHP Email Form Class
 * This class is used to handle the email sending functionality for the contact form.
 */

class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $ajax;
    public $smtp;
    public $message;

    public function __construct() {
        $this->ajax = false;
        $this->message = '';
    }

    public function add_message($value, $label, $max_length = 0) {
        if ($max_length && strlen($value) > $max_length) {
            $value = substr($value, 0, $max_length);
        }
        $this->message .= "$label: $value\n";
    }

    public function send() {
        $headers = "From: $this->from_name <$this->from_email>\r\n";
        $headers .= "Reply-To: $this->from_email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Try sending via mail() first
        if (mail($this->to, $this->subject, $this->message, $headers)) {
            return true; // Email sent successfully
        } else {
            // If mail() fails, try SMTP
            if ($this->smtp) {
                return $this->smtp_send();
            } else {
                error_log("Failed to send email. Check server mail configuration.");
                return false;
            }
        }
    }

    private function smtp_send() {
        // Load PHPMailer classes
        require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
        require_once 'vendor/phpmailer/phpmailer/src/Exception.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = $this->smtp['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->smtp['username'];
            $mail->Password = $this->smtp['password'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = $this->smtp['port'];

            // Sender and recipient
            $mail->setFrom($this->from_email, $this->from_name);
            $mail->addAddress($this->to);

            // Email content
            $mail->isHTML(false);
            $mail->Subject = $this->subject;
            $mail->Body = $this->message;

            // Send email
            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log("SMTP Error: " . $mail->ErrorInfo); // Log SMTP errors
            return false;
        }
    }
}
?>