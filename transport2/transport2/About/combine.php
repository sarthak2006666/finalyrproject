<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Services</title>
    <style>
       
        /* Reset margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            overflow-x: hidden;
        }
        header {
            position: fixed;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent; /* Transparent effect */
            padding: 15px 30px;
            top: 0;
            left: 0;
            width: 100%;
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        header.scrolled {
            background-color: white; /* Solid color when scrolled */
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
            color: black;
            text-decoration: none;
            font-size: 19px;
            padding: 10px 15px;
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: #ec7216;
            color: white;
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

        .main-header {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            position: relative;
        }

        .main-header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
        }

        .main-header p {
            margin: 10px 0 30px;
            font-size: 18px;
            color: #dcdcdc;
        }

        .main-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .main-buttons button {
            background-color: #fff;
            color: #1a1a1a;
            border: 2px solid #1a1a1a;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .main-buttons button:hover,
        .main-buttons button.active {
            background-color: #f97316;
            color: #fff;
            border-color: #f97316;
        }

        .main-content {
            position: relative;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10 auto;
            padding: 75px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1100px;
        }

        .main-content img {
            max-width: 40%;
            height: auto;
        }

        .main-content-text {
            max-width: 55%;
        }

        .main-content-text h2 {
            font-size: 22px;
            color: #333;
            margin: 0 0 10px;
        }

        .main-content-text p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }



	 body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .mission-section {
            width: 100%;
            background-color: #fff;
            padding: 50px 20px;
            box-sizing: border-box;
            margin-top: 100px;
            text-align: center;
        }

        .mission-content {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .mission-images {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .mission-images img {
            width: 100%;
            max-width: 400px;
            height: auto;
            display: block;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .mission-text {
            flex: 1;
            text-align: left;
        }

        .mission-text h2 {
            font-size: 36px;
            color: #082567;
            margin-bottom: 20px;
        }

        .mission-text .item {
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .mission-text .item h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .mission-text .item p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        @media (max-width: 768px) {
            .mission-content {
                flex-direction: column;
                text-align: center;
            }
            .mission-text {
                text-align: center;
            }
        }



* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
        }

        /* Full-Width Background */
        .full-width-container {
            width: 100%;
            background: #fafafa;
            padding: 50px 0;
        }

        /* Contact Section */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Left Side - Dark Blue Section */
        .contact-left {
            flex: 1;
            background: #001f4d;
            color: #fff;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
        }

        .contact-left h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .contact-left p {
            font-size: 18px;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .phone-number {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #FFD700;
        }

        .contact-button {
            display: inline-block;
            background: #ff9900;
            color: #fff;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .contact-button:hover {
            background: #e67e00;
            transform: scale(1.05);
        }

        /* Right Side - Contact Details */
        .contact-details {
            flex: 1.5;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 50px;
            background: #fff;
        }

        .detail-item {
            flex: 1 1 calc(50% - 20px);
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            text-align: left;
            transition: 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .detail-item h3 {
            font-size: 20px;
            color: #003366;
            margin-bottom: 10px;
            border-left: 5px solid #ff9900;
            padding-left: 12px;
        }

        .detail-item p {
            font-size: 16px;
            color: #555;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .contact-container {
                flex-direction: column;
                text-align: center;
            }

            .contact-left {
                padding: 40px;
                align-items: center;
            }

            .contact-details {
                padding: 40px;
                flex-direction: column;
                align-items: center;
            }

            .detail-item {
                flex: 1 1 100%;
            }
        }



 body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa; /* Lighter than #f8f8f8 */
        }

        .services-section {
            padding: 50px 10%;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .services-title {
            font-size: 24px;
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
        }

        .services-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            text-align: left;
        }

        .service-box {
            width: 30%;
            position: relative;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            animation: slideUp 0.8s ease-in-out forwards;
            opacity: 0;
        }

        /* Animates each box one by one */
        .service-box:nth-child(1) { animation-delay: 0.3s; }
        .service-box:nth-child(2) { animation-delay: 0.5s; }
        .service-box:nth-child(3) { animation-delay: 0.7s; }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-box:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .service-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .service-box:hover img {
            transform: scale(1.1) rotate(2deg);
        }

        .service-title {
            font-weight: bold;
            margin-top: 10px;
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }

        .service-title:hover {
            color: rgb(255, 115, 0);
        }

        .service-description {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }




        body {
            font-family: Arial, sans-serif; 
            margin: 0;
            padding: 0;
            background-color:rgb(255, 255, 255); /* Lighter than #f8f8f8 */
        }

        .services-section {
            padding: 50px 10%;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .services-title {
            font-size: 24px;
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
        }

        .services-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            text-align: left;
        }

        .service-box {
            width: 30%;
            position: relative;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            animation: slideUp 0.8s ease-in-out forwards;
            opacity: 0;
        }

        /* Animates each box one by one */
        .service-box:nth-child(1) { animation-delay: 0.3s; }
        .service-box:nth-child(2) { animation-delay: 0.5s; }
        .service-box:nth-child(3) { animation-delay: 0.7s; }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-box:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .service-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .service-box:hover img {
            transform: scale(1.1) rotate(2deg);
        }

        .service-title {
            font-weight: bold;
            margin-top: 10px;
            transition: color 0.3s ease-in-out;
            cursor: pointer;
        }

        .service-title:hover {
            color: rgb(255, 115, 0);
        }

        .service-description {
            font-size: 14px;
            color: black;
            margin-top: 5px;
        }

        .footer {
      background-color: #1c1d21;
      color: #ffffff;
      padding: 80px 20px;
      padding-bottom: 10px;
      margin-top: 50px;
      flex-shrink: 0; /* Ensures the footer doesn't shrink */
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
        @media (max-width: 768px) {
            header {
                padding: 10px 20px;
            }
            nav ul {
                flex-direction: column;
                align-items: flex-start;
            }
            nav ul li {
                margin: 10px 0;
            }
            .main-content {
                flex-direction: column;
                padding: 20px;
            }
            .main-content img {
                max-width: 100%;
                margin-bottom: 20px;
            }
            .main-content-text {
                max-width: 100%;
            }
            .mission-content {
                flex-direction: column;
                padding: 20px;
            }
            .mission-images, .mission-text {
                max-width: 100%;
                margin-bottom: 20px;
            }
            .contact-container {
                flex-direction: column;
                padding: 20px;
            }
            .contact-left, .contact-details {
                width: 100%;
                margin-bottom: 20px;
            }
            .detail-item {
                width: 100%;
                margin-bottom: 10px;
            }
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
            </ul>
        </nav>
    </header>
    <section class="hero-section">
        <h1>About Us</h1>
        <p>Your Trusted Partner in Transportation Solutions </p>
    </section>

    <div class="main-header">
        <h1>Professional Main Services</h1>
        <p>We provide comprehensive solutions in warehousing, transportation, and logistics to ensure seamless supply chain management.</p>
        <div class="main-buttons">
    <button class="main-service-button active" 
        data-title="Transportation Services" 
        data-description="Our transportation services ensure the efficient movement of goods through road, air, and sea. We provide tailored logistics solutions with real-time tracking, optimized routes, and secure handling. Whether you need express delivery, bulk shipping, or specialized transport, we guarantee timely and cost-effective solutions." 
        data-image-url="trans.jpg">
        Transportation
    </button>

    <button class="main-service-button" 
        data-title="Logistics Solutions" 
        data-description="We offer end-to-end logistics solutions, covering inventory management, distribution, and supply chain optimization. Our expertise ensures seamless coordination between suppliers, warehouses, and customers. With advanced technology and a dedicated team, we enhance efficiency and reduce operational costs." 
        data-image-url="log.jpg">
        Logistics
    </button>

    <button class="main-service-button" 
        data-title="Warehousing & Storage" 
        data-description="Our warehousing and storage solutions provide secure and scalable options for businesses. With climate-controlled facilities, real-time inventory management, and advanced security measures, we help businesses streamline their storage needs. From short-term holding to long-term logistics planning, we ensure your goods are always in safe hands." 
        data-image-url="ware.jpg">
        Warehousing
    </button>
</div>
    </div>

   <div class="main-content" id="main-content" style="display: none;">
    <img id="main-content-image" src="" alt="Service Image">
    <div class="main-content-text">
        <h2 id="main-content-title"></h2>
        <p id="main-content-description"></p>
    </div>
</div>



<div class="services-section">
        <h2 class="services-title">We Are Committed To <br> Providing Quality Services</h2>
        <div class="services-container">
            <?php
            $services = [
                [
                    "title" => "Fleet Management",
                    "image" => "Vehicle.jpg", 
                    "description" => "Efficiently monitor and control vehicle operations to enhance productivity. Optimize routes, track fuel usage, and ensure smooth logistics."
                ],
                [
                    "title" => "Vehicle Maintenance",
                    "image" => "fleeet.jpg",
                    "description" => "Regular inspections and servicing to prevent unexpected breakdowns. Keep your fleet in top condition for safety and longevity."
                ],
                [
                    "title" => "GPS Tracking",
                    "image" => "GPS.png",
                    "description" => "Real-time location tracking to improve fleet efficiency and security. Monitor movements, reduce delays, and optimize dispatching."
                ]
            ];

            foreach ($services as $service) {
                echo '
                <div class="service-box">
                    <img src="' . $service["image"] . '" alt="' . $service["title"] . '">
                    <h5 class="service-title">' . $service["title"] . '</h5>
                    <p class="service-description">' . $service["description"] . '</p>
                </div>';
            }
            ?>
        </div>
    </div>




 <section class="mission-section">
        <div class="mission-content" id="missionContent">
            <div class="mission-images">
                <img src="mission.png" alt="Main Image">
            </div>
            <div class="mission-text">
                <h2>Our Mission</h2>
                <div class="item">
                    <h3>The Mission</h3>
                    <p>
                        Customers have the power to choose in this competitive and open market. Our aim is to provide high-quality service along with fair and competitive pricing.
                    </p>
                </div>
                <div class="item">
                    <h3>Our Drive & Vision</h3>
                    <p>
                        Our Vision is to be India's most trusted transport and Logistics Company.
                    </p>
                </div>
                <div class="item">
                    <h3>Our Goal</h3>
                    <p>
                        To provide safe, high-quality, and dependable transportation services with on-time delivery, competitive pricing, and continuous improvement.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br><br>


<!-- Full-Width White Background -->
    <div class="full-width-container">
        <section class="contact-container">
            <!-- Left Section -->
            <div class="contact-left">
                <h2>Let's Talk</h2>
                <p>Need assistance? We are here to help!</p>
                <p class="phone-number">+91 9892002243</p>
                <button class="contact-button">Contact Us</button>
            </div>

            <!-- Right Section -->
            <div class="contact-details">
                <div class="detail-item">
                    <h3>Office Address</h3>
                    <p>2/8, Panchal Estate, Shyamnagar, Near Gupta Soap Company, Jogeshwari(E), Mumbai-400060</p>
                </div>
                <div class="detail-item">
                    <h3>Contact Us</h3>
                    <p>+91 9892002243<br>+91 9619002243</p>
                </div>
                <div class="detail-item">
                    <h3>Working Hours</h3>
                    <p>Available 24/7</p>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-container">
          <div class="footer-row">
            <div class="footer-logo">
              <h2>Shree Dev Jom</h2>
              <p>With our worldwide inclusion, strong <br>
                transportation organization and industry</p><br>
              <p>Subscribe to our Newsletter</p>
              <form class="newsletter-form">
                <input type="email" placeholder="Your email address">
                <button type="submit">➔</button>
              </form>
            </div>
            <div class="footer-description">
              <h2>Who we are</h2>
              <p>Shree Dev Jom Transportation<br> 
                is a trusted name in truck rental<br>
                and delivery services, dedicated<br>
                to serving businesses and<br>
                individuals across Mumbai</p><br>
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
              <p>Phone: <br>+91 9892002243<br>
                        +91 9619002243</p>
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
    document.addEventListener("DOMContentLoaded", function() {
        let missionContent = document.getElementById("missionContent");
        let items = document.querySelectorAll(".mission-text .item");
        
        setTimeout(() => {
            missionContent.style.opacity = "1";
            missionContent.style.transform = "translateY(0)";

            items.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = "1";
                    item.style.transform = "translateY(0)";
                }, 300 * index);
            });
        }, 500);
    });

    document.querySelectorAll('.main-service-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.main-service-button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const contentContainer = document.getElementById('main-content');
            const title = this.getAttribute('data-title');
            const description = this.getAttribute('data-description');
            const imageUrl = this.getAttribute('data-image-url');

            document.getElementById('main-content-title').textContent = title;
            document.getElementById('main-content-description').textContent = description;
            document.getElementById('main-content-image').src = imageUrl;

            // Show the container with a smooth fade-in effect
            contentContainer.style.display = 'flex';
            contentContainer.style.opacity = '0';
            setTimeout(() => {
                contentContainer.style.opacity = '1';
                contentContainer.style.transition = 'opacity 0.5s ease-in-out';
            }, 100);
        });
    });
</script>

</body>
</html>
