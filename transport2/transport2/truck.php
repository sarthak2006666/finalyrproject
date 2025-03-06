<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Fleet Gallery</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            zoom: 75%;
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
            width: 100%; /* Full width of the screen */
            transition: background-color 3s ease; /* Smooth transition */
            box-sizing: border-box; /* Include padding in width calculation */
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

        /* Hero Section */
        .hero-section {
            text-align: center;
            background-image: url('header.jpg');
            background-attachment: fixed;
            background-size: cover; /* Ensure the background covers the entire section */
            background-position: center; /* Center the background image */
            width: 100%; /* Full width */
            height: 65vh; /* Full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: black;
        }
        .hero-section h1 {
            font-weight: bold;
            font-size: 80px; /* Adjust font size as needed */
            margin: 0;
            animation: fadeInDown 1s ease-out;
        }
        .hero-section p {
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

        /* Container Styles */
        .container {
            display: flex;
            width: 100%; /* Full width */
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            height: 300px; /* Reduced height */
        }

        /* Left Side - Photo */
        .left-side {
            flex: 1.04; /* Equal flex ratio */
            background: url('truck.jpg') no-repeat center center/cover;
            background-color: #ec7216; /* Orange background for photo side */
        }

        /* Right Side - Information */
        .right-side {
            flex: 1; /* Equal flex ratio */
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: black; /* Black background for text side */
            color: white; /* White text for better readability */
        }

        .right-side h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .right-side p {
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Alternate Layout for Even Containers */
        .container:nth-child(even) .left-side {
            order: 2; /* Move photo to the right */
        }

        .container:nth-child(even) .right-side {
            order: 1; /* Move text to the left */
        }

        /* Footer Styles */
        .footer {
            background-color: #1c1d21;
            color: #ffffff;
            padding: 80px 0; /* Adjust padding */
            width: 100%; /* Full width */
            margin-top: 0; /* Remove margin above footer */
            flex-shrink: 0; 
        }
        .footer-container {
            padding-left: 5%;
            padding-right: 5%;
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
        .footer-description {
            margin-right: 30px;
        }
        .footer-description h2 {
            margin-left: 50px;
            margin-bottom: 35px;
            font-size: 32px;
            color: #ec7216;
            font-weight: bold;
        }
        .footer-description p {
            font-size: 20px;
            color: white;
        }
        .footer-links {
            flex: 1 1 16%;
            margin-bottom: 20px;
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
        <h1>FAQ</h1>
        <p>Find Answers to Your Questions Here </p>
    </section>

    <!-- Container 1 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Heavy Duty Truck</h1>
            <p>
                Our heavy-duty trucks are built for performance and reliability. Whether you're hauling cargo across the city or across the country, our fleet is designed to meet your needs.
            </p>
        </div>
    </div>

    <!-- Container 2 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Compact Car</h1>
            <p>
                Perfect for city driving, our compact cars are fuel-efficient, easy to maneuver, and packed with modern features for a comfortable ride.
            </p>
        </div>
    </div>

    <!-- Container 3 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Luxury SUV</h1>
            <p>
                Experience the ultimate in comfort and style with our luxury SUVs. Spacious interiors, advanced technology, and premium finishes make every journey unforgettable.
            </p>
        </div>
    </div>

    <!-- Container 4 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Electric Vehicle</h1>
            <p>
                Go green with our electric vehicles. Zero emissions, cutting-edge technology, and a smooth, quiet ride make these cars the future of transportation.
            </p>
        </div>
    </div>

    <!-- Container 5 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Pickup Truck</h1>
            <p>
                Built for tough jobs, our pickup trucks offer unmatched durability and power. Whether for work or play, these trucks are ready for anything.
            </p>
        </div>
    </div>

    <!-- Container 6 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Sports Car</h1>
            <p>
                Feel the thrill of the open road with our high-performance sports cars. Sleek designs, powerful engines, and precision handling define these vehicles.
            </p>
        </div>
    </div>

    <!-- Container 7 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Minivan</h1>
            <p>
                Ideal for families, our minivans offer spacious interiors, versatile seating, and advanced safety features for a comfortable and secure ride.
            </p>
        </div>
    </div>

    <!-- Container 8 -->
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
            <h1>Off-Road Vehicle</h1>
            <p>
                Conquer any terrain with our off-road vehicles. Built for adventure, these vehicles are rugged, durable, and ready for the toughest challenges.
            </p>
        </div>
    </div>

    <!-- Footer -->
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
            if (window.scrollY > 50) { // Trigger when scrolled more than 50px
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>