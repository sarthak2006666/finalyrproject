<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$signInError = "";
$signUpError = "";
$signUpSuccess = "";

// Handle Sign-In Form
if (isset($_POST['signin'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: navbar.php");
            exit();
        } else {
            $signInError = "Invalid password.";
        }
    } else {
        $signInError = "No account found with that email.";
    }
    $stmt->close();
}

// Handle Sign-Up Form
if (isset($_POST['signup'])) {
    $email = trim($_POST['new_email']);
    $password = trim($_POST['new_password']);
    $confirmPassword = trim($_POST['confirm_password']);

    if ($password !== $confirmPassword) {
        $signUpError = "Passwords do not match.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $hashedPassword);

        if ($stmt->execute()) {
            $signUpSuccess = "Account created successfully! You can now sign in.";
        } else {
            $signUpError = "Error: " . ($stmt->errno === 1062 ? "Email already exists." : $stmt->error);
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Sign Up</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg,#ffa43b, #ec7216, #d65f12);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        zoom: 75%;
    }

    .container {
        max-width: 400px;
        width: 90%;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        padding: 30px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
        color: black;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: 600;
    }

    input[type="email"],
    input[type="password"] {
        width: 90%;
        padding: 12px 15px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        background: #f9f9f9;
        transition: all 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #4caf50;
        background: #fff;
        outline: none;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    button {
        width: 100%;
        padding: 12px 15px;
        margin-top: 15px;
        background: #ec7216;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background: #45a049;
    }

    .error, .success {
        text-align: center;
        font-size: 14px;
        margin: 10px 0;
    }

    .error {
        color: red;
    }

    .success {
        color: green;
    }

    .toggle {
        text-align: center;
        margin-top: 20px;
    }

    .toggle a {
        color: #ec7216;
        text-decoration: none;
        font-weight: 500;
    }

    .toggle a:hover {
        text-decoration: underline;
    }
</style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.style.zoom = "75%";
        });
    </script>
</head>
<body>
    <div class="container">
        <?php if (!isset($_GET['signup'])): ?>
            <!-- Sign-In Form -->
            <h2>Sign In</h2>
            <?php if (!empty($signInError)): ?>
                <p class="error"><?php echo $signInError; ?></p>
            <?php endif; ?>
            <form action="signin_signup.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="signin">Sign In</button>
            </form>
            <div class="toggle">
                <p>Don't have an account? <a href="?signup">Sign Up</a></p>
            </div>
            <div class="toggle">
    <p><a href="forgot_password.php">Forgot Password?</a></p>
</div>
        <?php else: ?>
            <!-- Sign-Up Form -->
            <h2>Sign Up</h2>
            <?php if (!empty($signUpError)): ?>
                <p class="error"><?php echo $signUpError; ?></p>
            <?php elseif (!empty($signUpSuccess)): ?>
                <p class="success"><?php echo $signUpSuccess; ?></p>
            <?php endif; ?>
            <form action="signin_signup.php?signup" method="POST">
                <input type="email" name="new_email" placeholder="Email" required>
                <input type="password" name="new_password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit" name="signup">Sign Up</button>
            </form>
            <div class="toggle">
                <p>Already have an account? <a href="signin_signup.php">Sign In</a></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
