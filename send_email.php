<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is installed and autoloaded

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve form inputs
    $firstName   = htmlspecialchars(trim($_POST['firstName'] ?? ''));
    $lastName    = htmlspecialchars(trim($_POST['lastName'] ?? ''));
    $company     = htmlspecialchars(trim($_POST['company'] ?? ''));
    $orderNumber = htmlspecialchars(trim($_POST['orderNumber'] ?? ''));
    $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message     = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Example subject (you can change it as needed)
    $subject = "New Inquiry from Logistics Company Website";

    // Basic validation
    if (!$firstName || !$lastName || !$email || !$message) {
        echo "Please fill in all required fields correctly.";
        exit;
    }

    $mail = new PHPMailer(true);
    echo $message;
    try {
        // SMTP settings (replace placeholders with your actual SMTP info)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // e.g., smtp.gmail.com
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tulish2001@gmail.com'; // e.g., your Gmail username
        $mail->Password   = 'bkyk kiaw xlpg myjt';             // e.g., your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465; // or another port if needed

        // Sender and recipient
        $mail->setFrom($email, $firstName . ' ' . $lastName);
        $mail->addAddress('tulish2001@gmail.com', 'Admin or Team');

        // Reply-to address
        $mail->addReplyTo($email, $firstName . ' ' . $lastName);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;

        // Build the HTML body with the form data
        $mail->Body = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f9;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    padding: 20px;
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #ffffff;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                }
                .header {
                    text-align: center;
                    margin-bottom: 20px;
                }
                .footer {
                    text-align: center;
                    margin-top: 30px;
                    font-size: 12px;
                    color: #888;
                }
                .info {
                    margin-bottom: 10px;
                    padding: 10px;
                    background: #f9f9f9;
                    border-radius: 3px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='info'>
                    <strong>First Name:</strong> {$firstName}
                </div>
                <div class='info'>
                    <strong>Last Name:</strong> {$lastName}
                </div>
                " . (!empty($company) ? "
                <div class='info'>
                    <strong>Company:</strong> {$company}
                </div>
                " : "") . (!empty($orderNumber) ? "
                <div class='info'>
                    <strong>Order Number:</strong> {$orderNumber}
                </div>
                " : "") . "
                <div class='info'>
                    <strong>Email:</strong> {$email}
                </div>
                <div class='info'>
                    <strong>Message:</strong>
                    <p>{$message}</p>
                </div>
                <div class='footer'>
                    Thank you for contacting us.
                </div>
            </div>
        </body>
        </html>
        ";

        // Optionally add attachments if needed:
        // $mail->addAttachment('/path/to/file.pdf', 'FileName.pdf');
        echo $mail->ErrorInfo;
        $mail->send();
        echo "Thank you for your message. We will contact you soon.";
            header('Location: index.php?status=success');


    } catch (Exception $e) {
        echo $e->getMessage();
        header('Location: contacts.php?status=error');
    echo "There was an error sending your message. Please try again or email us directly.";
    }
} else {
    echo "Invalid request method.";
}
?>