<?php
session_start();
require 'vendor/autoload.php'; // Include PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $token = bin2hex(random_bytes(50)); // Generate a secure token
        $stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        $reset_link = "http://localhost/finalyrproject/transport2/transport2/reset_password.php?token=" . $token;

        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'sarthakmulye42006@gmail.com'; // Replace with your email
            $mail->Password = 'iyor sagl bulv ibxd'; // Replace with your email password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('your_email@gmail.com', 'Your Name');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body = "Click the link to reset your password: <a href='$reset_link'>$reset_link</a>";

            $mail->send();
            $message = "Password reset link has been sent to your email.";
        } catch (Exception $e) {
            $message = "Failed to send email. Error: " . $mail->ErrorInfo;
        }
    } else {
        $message = "No account found with this email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: url('bg3.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}

.container {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 350px;
}

h2 {
    margin-bottom: 15px;
    color: #2c3e50;
}

p {
    color: #e74c3c;
    font-size: 14px;
    margin-bottom: 15px;
}

input[type="email"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    margin-bottom: 15px;
}

button, input[type="email"] {
    width: 100%;
    height: 45px;
}

button {
    background: #2ecc71;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #27ae60;
}

@media (max-width: 400px) {
    .container {
        width: 90%;
    }
}


        </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p><?php echo $message; ?></p>
        <form method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit" name="submit">Send Reset Link</button>
        </form>
    </div>
</body>
</html>

