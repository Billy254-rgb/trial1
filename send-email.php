<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Correct Composer autoload

if (isset($_POST['submitContact'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bildadkimanthi2@gmail.com'; // Fixed email
        $mail->Password = 'rumf kpql tmvn myjb'; // Use app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender/Recipient
        $mail->setFrom('bildadkimanthi2@gmail.com', 'ULISO');
        $mail->addAddress('bildadkimanthi2@gmail.com', 'ULISO');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body = "
            <h3>Hello, you got a new form submission</h3>
            <h4>Name: $name</h4>
            <h4>Email: $email</h4>
            <h4>Subject: $subject</h4>
            <h4>Message: $message</h4>
        ";

        $mail->send();
        $_SESSION['status'] = "Thank you for your support!";
    } catch (Exception $e) {
        $_SESSION['status'] = "Error: " . $e->getMessage();
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>