<?php
session_start();
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

        $reset_link = "http://localhost/transport/reset_password.php?token=" . $token;
        
        // Send email (you must configure mail settings)
        $subject = "Password Reset Request";
        $message_body = "Click the link to reset your password: " . $reset_link;
        $headers = "From: your_email@example.com\r\nReply-To: your_email@example.com";

        if (mail($email, $subject, $message_body, $headers)) {
            $message = "Password reset link has been sent to your email.";
        } else {
            $message = "Failed to send email. Please try again.";
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
</head>
<body>
    <h2>Forgot Password</h2>
    <p><?php echo $message; ?></p>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit" name="submit">Send Reset Link</button>
    </form>
</body>
</html>
