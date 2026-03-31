<?php
include('admin/db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: thankyou.php");
    exit;
}

// Collect form data
$name = $_POST['name'] ?? '';
$position = $_POST['position'] ?? '';
$qualification = $_POST['qualification'] ?? '';
$contactNumber = $_POST['contactNumber'] ?? '';
$email = $_POST['email'] ?? '';
$comments = $_POST['comments'] ?? '';
$subject = $_POST['subject'] ?? 'Career Enquiry';
$career_id = $_POST['career_id'] ?? null;

$mail = new PHPMailer(true);

try {

    // ===== FILE UPLOAD =====
    $resumePath = null;

    if (!empty($_FILES['cv']['name'])) {

        $allowedTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        $maxSize = 2 * 1024 * 1024; // 2 MB

        if ($_FILES['cv']['size'] > $maxSize) {
            die('File too large. Maximum allowed size is 2 MB.');
        }

        $fileType = mime_content_type($_FILES['cv']['tmp_name']);

        if (!in_array($fileType, $allowedTypes)) {
            die('Invalid file type.');
        }

        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $uniqueName = time() . '_' . basename($_FILES['cv']['name']);
        $targetPath = $uploadDir . $uniqueName;

        if (!move_uploaded_file($_FILES['cv']['tmp_name'], $targetPath)) {
            die('File upload failed.');
        }

        $resumePath = 'uploads/' . $uniqueName;
        $mail->addAttachment($targetPath);
    }

    // ===== DATABASE =====
    if ($resumePath) {
        $stmt = $connection->prepare("
            INSERT INTO career_enquiry
            (career_id, position, name, qualification, mob_no, email_id, resume, message, created_date, updated_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
        ");
        $stmt->bind_param("isssssss", $career_id, $position, $name, $qualification, $contactNumber, $email, $resumePath, $comments);
    } else {
        $stmt = $connection->prepare("
            INSERT INTO career_enquiry
            (career_id, position, name, qualification, mob_no, email_id, message, created_date, updated_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
        ");
        $stmt->bind_param("isssssss", $career_id, $position, $name, $qualification, $contactNumber, $email, $comments);
    }

    $stmt->execute();
    $stmt->close();

    // ===== EMAIL =====
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'banu.safeera987@gmail.com';
    $mail->Password = 'qchhtyltjxeiwlwt';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Always send FROM your email
    $mail->setFrom('banu.safeera987@gmail.com', 'Career Enquiry');
    $mail->addAddress('banu.safeera987@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "
        <h3>New Career Application</h3>
        <p><strong>Position:</strong> $position</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Qualification:</strong> $qualification</p>
        <p><strong>Mobile:</strong> $contactNumber</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $comments</p>
    ";

    $mail->send();

    header("Location: thankyou.php");
    exit;

} catch (Exception $e) {
    echo "Error: " . $mail->ErrorInfo;
}