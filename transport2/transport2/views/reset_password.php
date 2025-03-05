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
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT email FROM users WHERE reset_token = ? AND token_expiry > NOW()";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $email = $user['email'];

        if (isset($_POST['reset'])) {
            $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE email = ?");
            $stmt->bind_param("ss", $new_password, $email);

            if ($stmt->execute()) {
                $message = "Password reset successfully. <a href='signin_signup.php'>Login here</a>";
            } else {
                $message = "Failed to reset password.";
            }
        }
    } else {
        $message = "Invalid or expired token.";
    }
} else {
    header("Location: signin_signup.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <p><?php echo $message; ?></p>
    <?php if (isset($email)): ?>
        <form method="POST">
            <input type="password" name="password" placeholder="New Password" required>
            <button type="submit" name="reset">Reset Password</button>
        </form>
    <?php endif; ?>
</body>
</html>
