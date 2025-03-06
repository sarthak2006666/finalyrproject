<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
        .faq-question {
            font-weight: bold;
            font-size: 18px;
        }
        .accordion-item {
            transition: all 0.5s;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        .accordion-button {
            font-size: 16px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #f5f5f5;
            color: #000000;
            transition: all 0.5s;
        }
        .accordion-button.focus {
            outline: none;
            box-shadow: none;
        }
        .accordion-button:not(.collapsed) {
            background-color: #ec7216;
            color: #ffffff;
        }
        .accordion-body {
            animation: accordionExpand 1s;
            padding: 20px;
            font-size: 16px;
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes accordionExpand {
            0% {
                height: 0;
                padding: 0;
            }
            100% {
                height: auto;
                padding: 1rem;
            }
        }
        .modal.fade {
            transition: opacity 0.5s;
        }
        .modal-dialog {
            transition: transform 0.5s;
            max-width: 500px;
        }
        .modal.fade.show {
            animation: modalFade 0.5s;
        }
        @keyframes modalFade {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        .modal-content {
            padding: 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-title {
            font-size: 24px;
            font-weight: bold;
        }
        .modal-footer {
            border-top: none;
        }
        .btn {
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            background-color: #333;
            color: #ffffff;
            transition: all 0.5s;
        }
        .btn:hover {
            background-color: #444;
        }
        .btn-primary {
            background-color: #ec7216 !important;
        }
        .btn-primary:hover {
            background-color: #ec7216 !important;
        }
        .faq-container h1 {
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 36px;
            color: #333;
        }
        .faq-container .accordion {
            width: 100%;
        }
        .faq-container button {
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #333;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .faq-container button:hover {
            background-color: #444;
        }
        @media (max-width: 768px) {
            .faq-container {
                width: 90%;
            }
        }
        @media (max-width: 480px) {
            .faq-container {
                width: 95%;
            }
            .faq-container h1 {
                font-size: 24px;
            }
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
        <h1>FAQ</h1>
        <p>Find Answers to Your Questions Here </p>
    </section>
    <div class="container faq-container">
        <h1 style="text-align: center;">Frequently Asked Questions</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="faq-question">What are your business hours ?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Our business hours are 24/7
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="faq-question">How do I book a truck ?</span>
                    </button>
                 </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        To book a ride, simply visit our website and fill out the get in touch form. You can also call us at +91 9892002243 to book over the phone.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="faq-question">What is your cancellation policy?</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        If you need to cancel your booking, please contact us at least 24 hours in advance to avoid any cancellation fees.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="faq-question">Do you offer discounts?</span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, we offer discounts for frequent riders and students. Please contact us for more information.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <span class="faq-question">How do I track my ride?</span>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        You can track your ride using our mobile app or by logging into your account on our website.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span class="faq-question">What types of trucks do you offer?</span>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We offer a variety of trucks including light-duty, medium-duty, and heavy-duty trucks to cater to different transportation needs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <span class="faq-question">How can I get a quote for my transportation needs?</span>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        You can get a quote by visiting our website and filling out the quote request form or by contacting us directly at +91 9892002243.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <span class="faq-question">Do you provide insurance for the goods being transported?</span>
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, we provide insurance options for the goods being transported to ensure their safety and security during transit.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        <span class="faq-question">Can I track my shipment in real-time?</span>
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, you can track your shipment in real-time using our mobile app or by logging into your account on our website.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <span class="faq-question">What payment methods do you accept?</span>
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We accept various payment methods including credit/debit cards, net banking, and UPI payments.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        <span class="faq-question">Do you offer same-day delivery services?</span>
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, we offer same-day delivery services for urgent transportation needs. Please contact us for more details and availability.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        <span class="faq-question">What areas do you serve?</span>
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We serve various areas across Mumbai and its surrounding regions. For specific locations, please contact our customer service.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        <span class="faq-question">Can I modify my booking after it has been confirmed?</span>
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, you can modify your booking after it has been confirmed. Please contact our customer service team to make any changes.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                        <span class="faq-question">What safety measures do you have in place for COVID-19?</span>
                    </button>
                </h2>
                <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We have implemented strict safety measures for COVID-19, including regular sanitization of trucks, mandatory masks for drivers, and contactless delivery options.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFifteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        <span class="faq-question">Do you provide packing and loading services?</span>
                    </button>
                </h2>
                <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, we provide packing and loading services to ensure your goods are safely transported. Please contact us for more details and pricing.
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            More Info
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        For more information, please visit our website or contact us at +91 9892002243.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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