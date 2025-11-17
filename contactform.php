<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path to autoload.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect POST data safely
    $name    = $_POST['name'] ?? '';
    $email  = $_POST['mail'] ?? '';
    $title   = $_POST['title'] ?? '';
    $Company = $_POST['Company'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['meassage'] ?? '';

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com'; // Your Gmail
        $mail->Password   = 'gqetcnlslqnxzspm'; // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Avoid SSL certificate verification issues (optional, if needed)
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        // Recipients
        $mail->setFrom('manimalladi05@gmail.com', 'Revansh Dental Hospital');
        $mail->addAddress('manimalladi05@gmail.com', 'Revansh Dental Hospital');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body    = "
            <h2>Contact Details</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Title:</strong> {$title}</p>
            <p><strong>Company:</strong> {$Company}</p>
           
            <p><strong>Service:</strong> {$service}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        $mail->send();
        echo '<script>alert("Message has been sent successfully!"); window.location.href="index.php";</script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo 'Access Denied';
}
?>
