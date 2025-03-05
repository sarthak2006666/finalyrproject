<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            width: 98%;
            transition: background-color 0.3s ease; /* Smooth transition */
            width: 100%;
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
        .container {
            margin-top: 100px;
            margin-bottom: 120px;
            padding-left: 5%;
            padding-right: 5%;
            max-width: 1480px;
        }
        .faq-container {
            animation: fadeIn 2s;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
	
	 body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            zoom: 75%;
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

        .main-header .main-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .main-header .main-buttons button {
            background-color: #fff;
            color: #1a1a1a;
            border: 2px solid #1a1a1a;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .main-header .main-buttons button:hover {
            background-color: #f97316;
            color: #fff;
            border-color: #f97316;
        }

        .main-header .main-buttons button.active {
            background-color: #f97316;
            color: #fff;
            border-color: #f97316;
        }

        .main-content {
            position: absolute;
            top: 800px; /* Adjusted to overlap the header */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            padding: 65px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%; /* Reduced width */
            max-width: 1100px; /* Smaller max width */
        }

        .main-content img {
            max-width: 40%; /* Reduced image width */
            height: auto;
        }

        .main-content-text {
            max-width: 55%; /* Adjusted text width */
        }

        .main-content-text h2 {
            font-size: 22px; /* Smaller font size for the title */
            color: #333;
            margin: 0 0 10px;
        }

        .main-content-text p {
            font-size: 14px; /* Smaller font size for the description */
            color: #666;
            line-height: 1.6; /* Slightly reduced line height */
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
	    margin-top: 300px;
        }

        .mission-content {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .mission-images {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .mission-images img {
            width: 100%;
            max-width: 400px;
            height: auto;
            display: block;
        }

        .mission-text {
            flex: 1;
        }

        .mission-text h2 {
            font-size: 36px;
            color: #082567;
            margin-bottom: 20px;
        }

        .mission-text .item {
            margin-bottom: 20px;
        }

        .mission-text .item h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .mission-text .item p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 40px 20px;
            background-color: #fff;
            max-width: 1300px;
            margin: 50px auto;
        
            
            border-radius: 12px;
            overflow: hidden;
            animation: fadeIn 1s ease-out;
        }

        .contact-left {
            flex: 1;
            background-color:#001f4d;
            color: #fff;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border-radius: 12px 0 0 12px;
        }

        .contact-left h2 {
            font-size: 28px;
            margin-bottom: 20px;
            animation: slideInLeft 1s ease-out;
        }

        .contact-left p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact-left .phone-number {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
            animation: slideInLeft 1.2s ease-out;
        }

        .contact-left .contact-button {
            display: inline-block;
            background-color: #ff9900;
            color: #fff;
            text-decoration: none;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .contact-left .contact-button:hover {
            background-color: #e67e00;
        }

        .contact-details {
            flex: 2;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 30px;
            animation: slideInRight 1s ease-out;
        }

        .detail-item {
            flex: 1;
            min-width: 250px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .detail-item h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
            border-left: 4px solid #ff9900;
            padding-left: 10px;
        }

        .detail-item p {
            font-size: 16px;
            color: #555;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(50px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .contact-left, .detail-item {
                flex: 1 1 100%;
                text-align: center;
            }

            .contact-left {
                border-radius: 12px 12px 0 0;
            }

            .contact-details {
                gap: 15px;
            }
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
        <p>
            We provide services in the field of road, sea, air transportation, and a full range of warehousing services. 
            Our team is dedicated to providing seamless logistics solutions to businesses and individuals. 
            Partner with us for reliable, fast, and efficient transportation.
        </p>
        <div class="main-buttons">
            <button class="main-service-button active" data-title="Air Freight" data-description="Air freight is a fast and reliable way to transport goods across long distances. Our air freight services include express shipping, temperature-sensitive solutions, and full cargo tracking. We specialize in delivering time-critical shipments safely and efficiently to destinations worldwide. With years of experience, our team ensures that your goods reach their destination on time, every time." data-image-url="https://via.placeholder.com/400/FF5733">Air Freight</button>
            <button class="main-service-button" data-title="Sea Freight" data-description="Sea freight is an economical choice for moving large shipments internationally. Our services include containerized shipping, bulk shipping, and customized logistics solutions. We partner with global carriers to ensure timely and efficient delivery across major seaports. Whether you’re transporting commercial goods or personal items, our sea freight solutions are designed for cost-effectiveness and reliability." data-image-url="https://via.placeholder.com/400/33FF57">Sea Freight</button>
            <button class="main-service-button" data-title="Road Freight" data-description="Road freight is an excellent option for short- and long-distance transportation. Our fleet includes vehicles for all cargo sizes, ensuring flexible and secure delivery. Whether it’s full truckload or less-than-truckload shipments, we prioritize punctuality and cost-effectiveness. We also offer GPS tracking and real-time updates for complete peace of mind during transit." data-image-url="https://via.placeholder.com/400/3357FF">Road Freight</button>
            <button class="main-service-button" data-title="Local Freight" data-description="Local freight services cater to businesses and individuals looking for fast, reliable delivery within their city or region. Our professional drivers and optimized routes ensure efficient pickups and drop-offs, keeping your logistics on schedule. Whether it’s same-day delivery or scheduled shipments, we’ve got you covered." data-image-url="https://via.placeholder.com/400/FFFF33">Local Freight</button>
        </div>
    </div>

    <div class="main-content">
        <img id="main-content-image" src="https://via.placeholder.com/400" alt="Courier Transport">
        <div class="main-content-text">
            <h2 id="main-content-title">All The Affordable Courier Transport</h2>
            <p id="main-content-description">
                We provide services in the field of road, sea, air transportation, and warehousing. 
                Enjoy seamless logistics with affordable rates and reliable service for all your transportation needs. 
                Whether you're shipping locally or internationally, we offer customized solutions to match your requirements. 
                Our dedicated team ensures that your goods are handled with care and delivered promptly. 
                Partner with us for world-class logistics and peace of mind.
            </p>
        </div>
    </div>


 <section class="mission-section">
        <div class="mission-content">
            <!-- Images Section -->
            <div class="mission-images">
                <img src="IMG1.jpg" alt="Main Image">
            </div>

            <!-- Text Section -->
            <div class="mission-text">
                <h2>Our Mission</h2>
                <div class="item">
                    <h3>The Mission</h3>
                    <p>
                        Customers have the power to choose in this competitive and open market. Our aim is to provide high quality service along with fair and competitive pricing.
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
    <section class="contact-container">
        <!-- Left Section -->
        <div class="contact-left">
            <h2>Let's Talk</h2>
            <p>You need any help? Get in touch</p>
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
                <p>24/7</p>
            </div>
        </div>
    </section>
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
    // Script for header scroll effect
    const header = document.querySelector('header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) { // Trigger when scrolled more than 50px
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Script for service buttons
    const serviceButtons = document.querySelectorAll('.main-service-button');

    serviceButtons.forEach(button => {
        button.addEventListener('click', () => {
            const title = button.getAttribute('data-title');
            const description = button.getAttribute('data-description');
            const imageUrl = button.getAttribute('data-image-url');

            document.getElementById('main-content-title').textContent = title;
            document.getElementById('main-content-description').textContent = description;
            document.getElementById('main-content-image').src = imageUrl;

            serviceButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
</script>

</body>
</html>
