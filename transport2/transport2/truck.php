<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucks</title>
    
    <!-- Importing Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        .banner {
          text-align: center;
            background-image: url('header.jpg');
            background-attachment: fixed;
        }

        .banner h1 {
          padding: 180px 0px;
            padding-bottom: 0px;
            font-size: 80px; /* Adjust font size as needed */
            margin: 0;
            animation: fadeInDown 1s ease-out;
        }

        .banner p {
          padding-bottom: 150px;
            font-size: 1.5rem;
            margin: 10px 0 0;
            animation: fadeInUp 1s ease-out;
        }
    body {
      font-family: 'General-Sans', sans-serif;
     
      padding: 20px;
      margin: 0;
    }
    .container {
      width: 100%;
      background-color: #1c1d21;
      padding: 20px;
      box-sizing: border-box;
    }
    .intro-section {
      text-align: center;
      margin-bottom: 30px;
    }
    .intro-section h2 {
      font-size: 2.5rem;
      color: white;
      margin-bottom: 15px;
    }
    .intro-section p {
      font-size: 1.2rem;
      color: white;
      line-height: 1.5;
      max-width: 900px;
      margin: 0 auto;
    }
    table {
      width: 85%;
      border-collapse: collapse;
      margin: 20px auto;
      background: #ffffff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    th {
      background: #ec7216;
      color: white;
      padding: 12px;
      text-align: left;
      font-size: 14px;
    }
    td {
      padding: 12px;
      font-size: 14px;
      color: #333;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #eaeaea;
    }






 body {
      margin: 0;
      padding: 0;
     
      background-color: #f4f4f4;
    }

    .truck-section {
      text-align: center;
      margin: 40px 20px;
    }

    .truck-section h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: #ec7216;
    }

    .truck-section p.description {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #333;
    }

    .truck-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      justify-content: center;
      padding: 0 20px;
    }

    .truck-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeIn 0.5s forwards;
    }

    /* Apply animation delay for each card */
    .truck-card:nth-child(1) { animation-delay: 0s; }
    .truck-card:nth-child(2) { animation-delay: 0.1s; }
    .truck-card:nth-child(3) { animation-delay: 0.2s; }
    .truck-card:nth-child(4) { animation-delay: 0.3s; }
    .truck-card:nth-child(5) { animation-delay: 0.4s; }
    .truck-card:nth-child(6) { animation-delay: 0.5s; }
    .truck-card:nth-child(7) { animation-delay: 0.6s; }
    .truck-card:nth-child(8) { animation-delay: 0.7s; }

    .truck-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(236, 114, 22, 0.3);
    }

    .truck-card img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .truck-card h3 {
      font-size: 1rem;
      margin: 10px 0;
      color: #000;
    }

    .truck-card p {
      font-size: 1rem;
      color: #555;
      margin: 5px 0;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
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
    .testimonials {
        background: #f5f5f5;
        padding: 50px 20px;
        text-align: center;
    }

    .testimonials h2 {
        font-size: 2.5rem;
        color: #ec7216;
        margin-bottom: 30px;
    }

    .testimonial {
        max-width: 800px;
        margin: 0 auto;
        font-size: 1.2rem;
        color: #333;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .testimonial::before {
        content: "“";
        font-size: 3rem;
        color: #ec7216;
    }

    .testimonial::after {
        content: "”";
        font-size: 3rem;
        color: #ec7216;
    }

    .cta-section {
        background: linear-gradient(45deg, #ec7216, #ff8c3b);
        padding: 50px 20px;
        text-align: center;
        color: white;
    }

    .cta-section h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .cta-section .btn {
        font-size: 1.2rem;
        padding: 15px 30px;
        background-color: white;
        color: #ec7216;
        border: none;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .cta-section .btn:hover {
        background-color: #ec7216;
        color: white;
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

    <section class="banner">
        <div>
            <h1>TRUCK TYPE</h1>
            <p>Explore the different types of trucks we offer</p>
        </div>
    </section>

  <div class="container">
    <div class="intro-section">
      <h2>Explore Our Range of Trucks</h2>
      <p>Discover the different types of trucks we offer, their sizes, and total load capacity. Whether you need a light-duty truck for small jobs or a heavy-duty truck for large-scale operations, we have the right vehicle for you.</p>
    </div>

    <table>
      <thead>
        <tr>
          <th>TRUCK TYPE</th>
          <th>SIZE (L X W X H)</th>
          <th>MAX WEIGHT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tata 407</td>
          <td>9 x 5.5 x 5 ft</td>
          <td>Max Load: 2.5 Ton</td>
        </tr>
        <tr>
          <td>Ashok Leyland Dost</td>
          <td>7 x 4.8 x 4.8 ft</td>
          <td>Max Load: 1 Ton</td>
        </tr>
        <tr>
          <td>Eicher 21.59</td>
          <td>21 x 7.5 x 7.5 ft</td>
          <td>Max Load: 10–12 Tons</td>
        </tr>
        <tr>
          <td>Eicher 20.59</td>
          <td>20 x 7.5 x 7.5 ft</td>
          <td>Max Load: 9–11 Tons</td>
        </tr>
        <tr>
          <td>Eicher 21.10</td>
          <td>21 x 7.5 x 7.5 ft</td>
          <td>Max Load: 10–12 Tons</td>
        </tr>
        <tr>
          <td>Tata 1613</td>
          <td>19 x 7.5 x 7.5 ft</td>
          <td>Max Load: 9–10 Tons</td>
        </tr>
        <tr>
          <td>Eicher 2114</td>
          <td>21 x 7.5 x 7.5 ft</td>
          <td>Max Load: 11–12 Tons</td>
        </tr>
        <tr>
          <td>Eicher 2119</td>
          <td>22 x 7.5 x 7.5 ft</td>
          <td>Max Load: 12–14 Tons</td>
        </tr>
      </tbody>
    </table>
  </div>

   <div class="truck-section">
    <h2>Truck Images</h2>
    <p class="description">All the trucks displayed below are closed-body trucks, designed for secure and efficient transportation.</p>
    <div class="truck-grid">
      <div class="truck-card">
        <img src="407.jpeg" alt="Tata 407">
        <h3>Tata 407</h3>
        <p>Max Load: 2.5 Ton</p>
      </div>
      <div class="truck-card">
        <img src="dost.jpeg" alt="Ashok Leyland Dost">
        <h3>Ashok Leyland Dost</h3>
        <p>Max Load: 1 Ton</p>
      </div>
      <div class="truck-card">
        <img src="2159.jpeg" alt="Eicher 21.59">
        <h3>Eicher 21.59</h3>
        <p>Max Load: 10–12 Tons</p>
      </div>
      <div class="truck-card">
        <img src="2059.jpeg" alt="Eicher 20.59">
        <h3>Eicher 20.59</h3>
        <p>Max Load: 9–11 Tons</p>
      </div>
      <div class="truck-card">
        <img src="2110.jpeg" alt="Eicher 21.10">
        <h3>Eicher 21.10</h3>
        <p>Max Load: 10–12 Tons</p>
      </div>
      <div class="truck-card">
        <img src="16131.png" alt="Tata 1613">
        <h3>Tata 1613</h3>
        <p>Max Load: 9–10 Tons</p>
      </div>
      <div class="truck-card">
        <img src="2114.jpeg" alt="Eicher 2114">
        <h3>Eicher 2114</h3>
        <p>Max Load: 11–12 Tons</p>
      </div>
      <div class="truck-card">
        <img src="2119.jpeg" alt="Eicher 2119">
        <h3>Eicher 2119</h3>
        <p>Max Load: 12–14 Tons</p>
      </div>
    </div>
  </div>

  <div class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial">
        "Shree Dev Jom Transportation provided excellent service. The truck was on time and the driver was very professional."
    </div>
    <div class="testimonial">
        "I highly recommend their services. The booking process was smooth and the truck was in great condition."
    </div>
    <div class="testimonial">
        "Great experience! The customer support team was very helpful and the delivery was prompt."
    </div>
  </div>

  <div class="cta-section">
    <h2>Ready to Book a Truck?</h2>
    <p>Contact us today to get a quote and book the perfect truck for your needs.</p>
    <button class="btn">Get a Quote</button>
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
    <script>
        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // Trigger when scrolled more than 50px
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.body.style.zoom = "75%";
        });
    </script>
</body>
</html>
