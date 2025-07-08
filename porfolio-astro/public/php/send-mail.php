<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!$name || !$email || !$message) {
        echo json_encode(["status" => "error", "message" => "Missing fields"]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'brandonm.caldarella@gmail.com'; // TU CORREO
        $mail->Password   = 'hkoh ehaw tuzr yuuv'; // ❗️NO uses esto en producción así. Luego te explico cómo protegerlo.
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Destinatario
        $mail->setFrom($email, $name);
        $mail->addAddress('brandonm.caldarella@gmail.com');

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = "New message from portfolio";
        $mail->Body    = "<strong>Name:</strong> $name <br><strong>Email:</strong> $email <br><strong>Message:</strong><br>$message";

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Message sent"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Mail error: {$mail->ErrorInfo}"]);
    }
}
