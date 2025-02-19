<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mphoitumeleng021@gmail.com";     // Use your own email address
        $mail->Password = getenv("SMTP_PASSWORD");      // Use your own password
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";

        // Email Settings
        $mail->isHTML(true);
        $mail->setFrom("mphoitumeleng021@gmail.com", "Portfolio Contact Form");     // Use your own email address
        $mail->addReplyTo($email, $name);
        $mail->addAddress("mphoitumeleng021@gmail.com");        // Use your own email address

        $mail->Subject = "New Contact Form Message from $name";
        $mail->Body = "<strong>Name:</strong> $name <br> <br>
                       <strong>Email:</strong> $email <br> <br>
                       <strong>Message:</strong> <br> $message";

        if ($mail->send()) {
            echo "success";
        } else {
            echo "error";
        }

    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}

?>