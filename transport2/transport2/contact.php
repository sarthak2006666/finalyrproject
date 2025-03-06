<?php
session_start();
require 'vendor/autoload.php'; // Include PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variables
$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $company_name = isset($_POST['company_name']) ? trim($_POST['company_name']) : "";
    $truck_type = isset($_POST['truck_type']) ? trim($_POST['truck_type']) : "";
    $goods_type = isset($_POST['goods_type']) ? trim($_POST['goods_type']) : "";
    $location = isset($_POST['location']) ? trim($_POST['location']) : "";
    $message = isset($_POST['message']) ? trim($_POST['message']) : "";

    if (empty($name) || empty($mobile) || empty($email) || empty($truck_type) || empty($goods_type)) {
        $errorMessage = "Please fill in all required fields.";
    } else {
        $sql = "INSERT INTO contact_queries (name, mobile, email, company_name, truck_type, goods_type, location, message) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $name, $mobile, $email, $company_name, $truck_type, $goods_type, $location, $message);

        if ($stmt->execute()) {
            $successMessage = "Your message has been sent successfully!";

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
                $mail->setFrom('no-reply@example.com', 'No Reply');
                $mail->addAddress('sarthakmulye42006@gmail.com'); // Replace with recipient email

                // Content
                $mail->isHTML(false);
                $mail->Subject = 'New Contact Form Submission';
                $mail->Body = "Name: $name\nMobile: $mobile\nEmail: $email\nCompany Name: $company_name\nTruck Type: $truck_type\nGoods Type: $goods_type\nLocation: $location\nMessage: $message";

                $mail->send();
                $successMessage .= " An email has been sent with the details.";
            } catch (Exception $e) {
                $errorMessage = "Error sending email: " . $mail->ErrorInfo;
            }
        } else {
            $errorMessage = "Error inserting data: " . $stmt->error;
        }
        $stmt->close();
    }
}

$is_logged_in = isset($_SESSION['user_id']);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      zoom: 75%;
    }
    header {
      position: fixed;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: transparent; 
      padding: 15px 30px;
      top: 0;
      left: 0;
      width: 98%;
      transition: background-color 3s ease; 
      width: 100%;
    }
    header.scrolled {
      background-color: white; 
    }
    header .logo img {
      max-width: 50px;
    }
    nav {
      flex-grow: 1;
      text-align: right;
    }
    nav ul {
      list-style: none;
      display: inline-flex;
      justify-content: flex-end;
      margin: 0;
      padding: 0;
    }
    nav ul li {
      margin: 0 20px;
    }
    nav ul li a {
      color: Black;
      text-decoration: none;
      font-size: 19px;
      padding: 10px 15px;
      transition: color 0.3s ease, background-color 0.3s ease;
    }
    nav ul li a:hover {
      background-color: #ec7216; 
      color:white;
      border-radius: 5px;
    }
    .call-to-action {
      font-size: 14px;
      color: #ec7216;
      font-weight: bold;
      text-align: right;
    }
    .intro-block {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 50px 20px;
      background: center/cover no-repeat;
      color: white;
      text-align: center;
    }
    .intro-block h1 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .hero-section {
      text-align: center;
      background-image: url('header.jpg');
      background-attachment: fixed;
    }
    .hero-section h1 {
      font-weight: bold;
      padding: 180px 0px;
      padding-bottom: 0px;
      font-size: 80px; /* Adjust font size as needed */
            margin: 0;
            animation: fadeInDown 1s ease-out;
    }
    .hero-section p {
      padding-bottom: 150px;
      font-size: 1.5rem;
            margin: 10px 0 0;
            animation: fadeInUp 1s ease-out;
    }
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .contact-form-section {
      display: flex;
      flex-direction: column;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 60px;
      padding-bottom: 60px;
      gap: 30px;
      width: 100%;
    }
    .contact-container {
      display: flex;
      justify-content: space-between;
    }
    .image-container {
      width: 50%; 
      margin-left: 60px;
      padding: 20px;
    }
    .image-container img {
      width: 100%;
      height: auto;
    }
    .contact-form {
      margin-right: 60px;
      width: 45%;
      background: #fff;
      padding: 30px;
    }
    .contact-form h2 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ec7216;
    }
    .contact-form input, 
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    .contact-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    .contact-form textarea {
      height: 100px;
    }
    .contact-form button {
      width: 100%;
      padding: 10px;
      background-color: #ec7216;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      margin-bottom:10px;
    }
    .contact-form button:hover {
      background-color: #d25d12;
    }
    .footer {
      background-color: #1c1d21;
      color: #ffffff;
      padding: 80px 20px;
      padding-bottom: 10px;
      margin-top: 50px;
      flex-shrink: 0; 
    }
    .footer-container{
      padding-left: 5%;
      padding-right: 5%;
      margin-top: 100px;
      max-width: 1480px;
      margin: 0 auto;
    }
    .footer-row {
      padding-top: 60px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .footer-logo {
      flex: 1 1 35%;
      margin-bottom: 20px;
    }
    .footer-logo h2 {
      font-size: 35px;
      margin-bottom: 25px;
    }
    .footer-logo p {
      font-size: 20px;
      margin-bottom: 20px;
    }
    .newsletter-form {
      display: flex;
      align-items: center;
    }
    .newsletter-form input {
      padding: 20px 60px;
      border: none;
      font-size: large;
      border-radius: 4px 0 0 4px;
      outline: none;
    }
    .newsletter-form button {
      padding: 22px 30px;
      background-color: #ec7216;
      color: #ffffff;
      border: none;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
    }
    .footer-links {
      flex: 1 1 16%;
      margin-bottom: 20px;
    }
    .footer-description {
      margin-right:30px;
    }
    .footer-description h2{
      margin-left: 50px;
      margin-bottom: 35px;
      font-size: 32px;
      color: #ec7216;
      font-weight: bold;
    }
    .footer-description p{
      font-size: 20px;
      color: white;
    }
    .footer-links h3 {
      margin-bottom: 35px;
      font-size: 32px;
      color: #ec7216;
      font-weight: bold;
    }
    .footer-links ul {
      list-style: none;
      padding: 0;
    }
    .footer-links ul li {
      margin-bottom: 12px;
    }
    .footer-links ul li a {
      color: #ffffff;
      text-decoration: none;
      font-size: 20px;
    }
    .footer-links ul li a:hover {
      text-decoration: underline;
    }
    .footer-contact {
      flex: 0 0 20%;
      margin-bottom: 25px;
    }
    .footer-contact h3 {
      color: #ec7216;
      font-weight: bold;
      font-size: 32px;
    }
    .footer-contact p {
      margin-top: 20px;
      font-size: 20px;
    }
    .footer-contact a {
      color: #ffffff;
      text-decoration: none;
    }
    .footer-contact a:hover {
      text-decoration: underline;
    }
    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 50px;
      font-size: 14px;
      border-top: 1px solid #ffffff;
      padding-top: 20px;
    }
    .social-links a {
      color: #ffffff;
      margin-right: 10px;
      text-decoration: none;
      font-size: 35px;
    }
    .social-links a:hover {
      color: #ec7216;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.zoom = "75%";
    });
  </script>
</head>
<body>
  <header>
    <div class="logo">
      <img src="Picsart_25-02-24_21-58-25-871.jpg" alt="logo">
    </div>
    <nav>
      <ul>
                <li><a href="navbar.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="truck.php">TRUCKS</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="signin_signup.php">SIGN IN</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
      </ul>
    </nav>
  </header>
  <section class="hero-section">
    <h1>Contact Us</h1>
    <p>Let’s Connect and Discuss Your Needs</p>
  </section>
  <section class="contact-form-section">
    <div class="contact-container">
      <div class="image-container">
        <img src="contact.jpg" alt="Logistics">
      </div>
      <form class="contact-form" action="contact.php" method="POST">
      
        <?php if (!empty($successMessage)): ?>
            <p style="color: green; text-align: center;"><?php echo $successMessage; ?></p>
        <?php endif; ?>
        <?php if (!empty($errorMessage)): ?>
            <p style="color: red; text-align: center;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>

        <h2>Get in Touch</h2>
        

        <button type="button" onclick="showSignInMessage()">Sign in to Continue</button>


        <input type="text" name="name" placeholder="Name" required <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
<input type="tel" name="mobile" placeholder="Mobile No" required <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
<input type="email" name="email" placeholder="Your Email" required <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
<input type="text" name="company_name" placeholder="Company Name" <?php echo !$is_logged_in ? 'disabled' : ''; ?>>

<select name="truck_type" required <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
    <option value="">Select Trucks Type</option>
    <option value="Eicher 2119">Eicher 2119</option>
    <option value="Eicher 2114">Eicher 2114</option>
    <option value="Tata 1613">Tata 1613</option>
    <option value="Eicher 21.10">Eicher 21.10</option>
    <option value="Eicher 20.59">Eicher 20.59</option>
    <option value="Eicher 21.59">Eicher 21.59</option>
    <option value="Ashok Leyland Dost">Ashok Leyland Dost</option>
    <option value="Tata 407">Tata 407</option>
</select>

<select name="goods_type" required <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
    <option value="">Select Goods Type</option>
    <option value="Electronics">Electronics</option>
    <option value="Furniture">Furniture</option>
    <option value="Construction Material">Construction Material</option>
    <option value="Food Products">Food Products</option>
</select>

<input type="text" name="location" placeholder="Location" <?php echo !$is_logged_in ? 'disabled' : ''; ?>>
<textarea name="message" placeholder="Write message" <?php echo !$is_logged_in ? 'disabled' : ''; ?>></textarea>
<button type="submit" name="submit_contact" <?php echo !$is_logged_in ? 'disabled' : ''; ?>>Submit</button>

</body>
</html>

      </form>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-logo">
          <h2>Shree Dev Jom</h2>
          <p>With our worldwide inclusion, strong <br> transportation organization and industry</p><br>
          <p>Subscribe to our Newsletter</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Your email address">
            <button type="submit">➔</button>
          </form>
        </div>
        <div class="footer-description">
          <h2>Who we are</h2>
          <p>Shree Dev Jom Transportation<br> is a trusted name in truck rental<br> and delivery services, dedicated<br> to serving businesses and<br> individuals across Mumbai</p><br>
        </div>
        <div class="footer-links">
          <h3>Utility Pages</h3>
          <ul>
            <li><a href="navbar.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="truck.php">Trucks</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h3>Contact Us</h3>
          <p>Phone: <br>+91 9892002243<br> +91 9619002243</p>
          <p>Email: <a href="shreedevtransport@gmail.com">shreedevtransport@gmail.com</a></p>
          <p>Address: <br>2/8, Panchal Estate, Shyamnagar, Near Gupta Soap Company, Jogeshwari(E), Mumbai</br></p>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="social-links">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
      </div>
    </div>
  </footer>
  <script>
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) { 
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
    document.querySelector('.newsletter-form').addEventListener('submit', function (e) {
      e.preventDefault();
      document.querySelector('.newsletter-form').innerHTML = 'Thank you for subscribing to our newsletter!';
    });
  



    

  
    function showSignInMessage() {
    let confirmSignIn = confirm("Sign in to continue.");
    
    if (confirmSignIn) {
      window.location.href = "signin_signup.php"; // Redirect to sign-in page
    }
  }

  function enableFields() {
    let inputs = document.querySelectorAll("input, select, textarea, button");
    inputs.forEach(input => input.disabled = false);
  }

  let userSignedIn = false; // Change this to true if the user is signed in

if (userSignedIn) {
  enableFields(); // Enable all fields if the user is signed in
}
  </script>

</body>
</html>