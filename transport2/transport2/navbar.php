<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'General Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            height: 1000px; /* For demonstration purposes to enable scrolling */
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
            width: 98%;
            transition: background-color 3s ease; /* Smooth transition */
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
        .welcome-banner {
            position: relative;
            margin-top:0px;
            width: 100%;
            height: 1100px; 
            background-image: url('truck13.webp'); 
            background-size: cover;
            background-position: center;
        }

        .banner-text {
            position: absolute;
            top: 20%;
            left: 5%; /* Move text closer to the left */
            color: black;
            text-align: left; /* Align text to the left */
        }

        .banner-text h1 { 
            font-family: 'inherit';
            font-size: 70px; 
            font-weight: bold;
        }
        .banner-text p {
            font-family: 'inherit';
            margin-top: -30px;
            font-size: 25px; /* Adjust font size for better readability */
            max-width: 800px; /* Limit width for a cleaner look */
            
        }
        .banner-button {
            display: inline-block;
            margin-top: 20px;
            margin-left: 300px;
            padding: 15px 30px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: #ec7216;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .banner-button:hover {
            background-color: #d65f12;
            transform: scale(1.05); /* Slight zoom effect */
        }

        .info-container {
    background-color: #1c1d21;
    color: white;
    padding: 50px 20px;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content-wrapper {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    position: relative;
}
.image-container {
    flex-shrink: 0;
    width: 1000px; /* Size of the square box */
    height: 500px;
    background-color: white; /* White background for the frame */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 40px;
    margin-left: 20px; /* Space between the image and vertical line */
    border: 2px solid #ccc; /* Optional: Border for the frame */
}

.image-container img {
    width: 90%; /* Scale image slightly smaller than the box */
    height: 80%;
    object-fit: cover; /* Ensure the image fits inside the box without distortion */
    border-radius: 0px; /* Optional: Slightly rounded corners for the image */
}


.vertical-line {
    width: 5px;
    height: 100%;
    background-color: #ec7216;
}

.text-section {
    flex: 1;
    padding-right: 20px;
    padding-left: 20px;
    text-align: left;
}

.text-section h2 {
    font-size: 36px;
    font-weight: bold;
    text-decoration: underline;
    margin-bottom: 20px;
}

.text-section p {
    font-size: 20px;
    line-height: 1.6;
}




.why-choose-us {
    background-color: white;
    padding: 50px 20px;
    text-align: center;
}

.why-choose-us h2 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 40px;
}

.boxes-container {
    display: grid;
    grid-template-columns: 1fr 1fr;  /* Two boxes in each row */
    grid-template-rows: repeat(3, auto);  /* Three rows */
    gap: 80px;  /* Reduced gap between boxes */
    justify-items: center;
}

.box-item {
    display: flex;
    align-items: center;
    justify-content: flex-start;  /* Align text to the left of the box */
    width: 100%;
    max-width: 550px;
    opacity: 0; /* Initially hidden */
    transform: translateY(50px); /* Move downwards */
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.box img {
    width: 200px; /* Image size inside the box */
    height: 300px; /* Image size inside the box */
    object-fit: cover;
}

.box-text {
    margin-left: 40px;  /* Reduced margin between box and text */
    text-align: left;
}

.box-text h3 {
    font-size: 26px;
    font-weight: bold;
    margin: 0 0 5px;  /* Reduced margin */
}

.box-text p {
    font-size: 18px;
    color: #666;
    margin: 0;  /* Removed any extra margin */
}

/* Add the visible class for the transition effect */
.visible {
    opacity: 1;
    transform: translateY(0); /* Reset the downward position */
}



.container {
        max-width: 100%;
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        margin-bottom: 0px;
        background-color:#1c1d21;
      }

      .title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        color: white; /* Blue color */
      }

      .description {
        font-size: 20px;
        text-align: center;
        margin-bottom: 60px;
        color: white; /* Blue color */
      }

      .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 50px;
      }

      .card {
        background-color: white;
        width:800px;
        margin-left:70px;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s ease, background-color 0.5s ease;
      }

      .card:hover {
        background-color: #ec7216; 
        transform: scale(1.05);
      }

      .card-title {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 10px;
        color: #1c1d21; /* Black color */
      }

      .card-content {
        font-size: 22px;
        color:#1c1d21 ; /* Blue color */
        line-height: 1.6;
      }

      @media (max-width: 768px) {
        .grid {
          grid-template-columns: 1fr; /* Single column for smaller screens */
        }
      }


    /* General Styling for the Customer Section */
.customer {
    text-align: center;
    padding: 50px 20px;
    background: #1c1d21;
    font-family: 'General Sans', sans-serif;
    color: #fff;
}

.customer h2 {
    font-size: 2.8em;
    color:  white;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 3px;
    opacity: 0; /* Initially hidden */
    transform: translateY(-20px); /* Initially moved up */
    transition: all 0.6s ease-in-out; /* Smooth transition */
}

/* Logos Grid */
.logos {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 columns */
    gap: 20px;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
}

.logo-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 12px;
    padding: 15px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    opacity: 0; /* Initially hidden */
    transform: translateY(50px); /* Initially moved down */
    transition: all 0.6s ease-in-out;
}

.logo-item img {
    max-width: 100%;
    height: auto;
    max-height: 80px;
    object-fit: contain;
    margin-bottom: 10px;
    transition: transform 0.4s ease;
}

.logo-item span {
    font-size: 1.1em;
    color: #1c1d21;
    font-weight: bold;
    text-align: center;
}

/* Hover Effects */
.logo-item:hover {
    transform: scale(1.1) rotate(-3deg);
    box-shadow: 0 10px 15px #ec7216;
}

.logo-item img:hover {
    transform: scale(1.2);
}

/* When Active (Scrolled Into View) */
.customer h2.scrolled {
    opacity: 1;
    transform: translateY(0);
}

.logo-item.scrolled {
    opacity: 1;
    transform: translateY(0);
}





.footer {
      background-color: #1c1d21;
      color: #ffffff;
      padding: 80px 20px;
      padding-bottom: 10px;
      margin-top: -10px;
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
            <img src="Picsart_25-02-24_21-58-25-871.jpg" alt="logoo">
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
    <div class="welcome-banner">
  <div class="banner-text">
    <h1>Shree Dev Jom Transport</h1>
    <p>"Delivering excellence in transportation with reliability, efficiency, and a commitment to connecting destinations seamlessly."</p>
    <a href="#services" class="banner-button">Learn More</a>  
</div>
</div>

<div class="info-container">
    <div class="content-wrapper">
    <div class="image-container">
        <img src="t2.jpg" alt="Logistics Image">
    </div>
    <div class="vertical-line"></div>
        <div class="text-section">
            <h2>Your Trusted Partner in Logistics</h2>
            <p>Shree Dev Jom Transport is a leading name in the transportation industry in Maharashtra, known for delivering customized logistics solutions that cater specifically to the diverse needs of businesses. With a strong regional presence and an established track record of excellence, we provide reliable and efficient transport services designed to streamline operations for corporate clients. Our years of experience in handling complex transportation requirements ensure that every client receives professional, timely, and hassle-free logistics solutions, making us an invaluable partner in driving supply chain success.</p>

            <p>Our expertise lies in working with corporate clients with contractual transportation needs, offering long-term partnerships built on trust and dependability. Whether you require intercity or statewide transportation, our focus on quality, safety, and punctuality ensures that our services align perfectly with your business objectives. By prioritizing seamless service and professional execution, Shree Dev Jom Transport empowers your business to operate efficiently and confidently, driving growth and operational excellence across Maharashtra.</p>
        </div> 
    </div>
    
</div>


    <div class="why-choose-us">
    <h2>Why Choose Us?</h2>
    <div class="boxes-container">
        <div class="box-item">
            <div class="box">
                <img src="wcu1.avif" alt="Image 1">
            </div>
            <div class="box-text">
                <h3>Rich Industry Experience</h3>
                <p>With years of experience managing a variety of transportation projects, we have developed a deep understanding of the logistics challenges that businesses face.</p>
            </div>
        </div>
        <div class="box-item">
            <div class="box">
                <img src="wcu2.png" alt="Image 2">
            </div>
            <div class="box-text">
                <h3>Advanced Technology</h3>
                <p>We utilize advanced technology to optimize our operations, ensuring that our fleet management is seamless. While we do not offer online booking, our dedicated support team provides real-time assistance, helping you navigate your logistics needs efficiently.</p>
            </div>
        </div>
        <div class="box-item">
            <div class="box">
                <img src="wcu3.jpg" alt="Image 3">
            </div>
            <div class="box-text">
                <h3>On Time, Every Time</h3>
                <p>Punctuality is our priority. Our processes are meticulously designed to ensure on-time deliveries, allowing businesses to avoid disruptions and stay on schedule, no matter the distance.</p>
            </div>
        </div>
        <div class="box-item">
            <div class="box">
                <img src="wcu4.png" alt="Image 4">
            </div>
            <div class="box-text">
                <h3>Competitive Pricing</h3>
                <p>Our transparent pricing ensures that you get the best value for your investment.</p>
            </div>
        </div>
        <div class="box-item">
            <div class="box">
                <img src="wcu5.webp" alt="Image 5">
            </div>
            <div class="box-text">
                <h3>Reliability and Safety</h3>
                <p>Safety and reliability are integral to our operations. We prioritize strict adherence to industry safety standards and use advanced security measures to safeguard your goods throughout the journey.</p>
            </div>
        </div>
        <div class="box-item">
            <div class="box">
                <img src="wcu6.avif" alt="Image 6">
            </div>
            <div class="box-text">
                <h3>Hassle-Free Services</h3>
                <p>Our commitment to providing contract-based full-load services allows us to offer flawless logistics solutions.</p>
            </div>
        </div>
    </div>
</div>


<div class="container">
      <h2 class="title">Our Strengths and Advantages</h2>
      <p class="description">
        We are very passionate about what we do! We have everything that is required to move your goods safely and damage-free. Choosing us means picking the smartest way to streamline the moving operations in your business and focus on your core operations.
      </p>
      <div class="grid">
        <div class="card">
          <h3 class="card-title">Strong Regional Expertise</h3>
          <p class="card-content">
            A deep understanding of Maharashtra’s transport network enables efficient route planning and faster deliveries. Strong relationships with local vendors and partners further enhance reliability and streamline logistics operations.
          </p>
        </div>
        <div class="card">
          <h3 class="card-title">Focus on Long-Term Partnerships</h3>
          <p class="card-content">
            Building long-term partnerships through contractual services ensures trust and dependability. Customized logistics solutions are tailored to support sustained growth and streamline business operations effectively.
          </p>
        </div>
        <div class="card">
          <h3 class="card-title">Proactive Problem Solving</h3>
          <p class="card-content">
            An experienced team proactively addresses unexpected challenges and emergencies, ensuring minimal disruptions. This adaptability helps maintain smooth and uninterrupted transportation schedules.
          </p>
        </div>
        <div class="card">
          <h3 class="card-title">Commitment to Environmental Responsibility</h3>
          <p class="card-content">
            Focus on fuel-efficient vehicles and optimized routing to reduce carbon footprint. Promotes sustainable logistics practices for eco-conscious businesses.
          </p>
        </div>
      </div>
    </div>


    <div class="customer">
            <h2>Our Beloved Customers</h2>
            <div class="logos">
                <div class="logo-item">
                    <img src="bluedart dhl.png" alt="Blue Dart DHL">
                    <span>Blue Dart DHL</span>
                </div>
                <div class="logo-item">
                    <img src="hr jonson.jpg" alt="Hr Jonson">
                    <span>Hr Jonson</span>
                </div>
                <div class="logo-item">
                    <img src="indigo.png" alt="Indigo">
                    <span>Indigo</span>
                </div>
                <div class="logo-item">
                    <img src="dmart.jpg" alt="DMart">
                    <span>DMart</span>
                </div>
                <div class="logo-item">
                    <img src="bunge.png" alt="Bunge">
                    <span>Bunge</span>
                </div>
                <div class="logo-item">
                    <img src="storia.png" alt="Storia">
                    <span>Storia</span>
                </div>
                <div class="logo-item">
                    <img src="gulab oils.png" alt="Gulab Oils">
                    <span>Gulab Oils</span>
                </div>
                <div class="logo-item">
                    <img src="vb.png" alt="Varun Beverage">
                    <span>Varun Bevearge</span>
                </div>
                <div class="logo-item">
                    <img src="pepsico.avif" alt="PepsiCo">
                    <span>PepsiCo</span>
                </div>
                <div class="logo-item">
                    <img src="trackon.png" alt="Trackons">
                    <span>Trackons</span>
                </div>
            </div>
        </div>

        <iframe src="testimonial.php" width="100%" height="900px" style="border:none;"></iframe>


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



        
        
    // Wait until the DOM is fully loaded
    document.addEventListener('DOMContentLoaded', () => {
        // Select the elements to animate
        const customerSection = document.querySelector('.customer');
        const heading = customerSection.querySelector('h2');
        const logoItems = document.querySelectorAll('.logo-item');

        // Create an Intersection Observer
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Add the "scrolled" class to the heading or logo items
                        if (entry.target.tagName === 'H2') {
                            entry.target.classList.add('scrolled');
                        } else if (entry.target.classList.contains('logo-item')) {
                            entry.target.classList.add('scrolled');
                        }
                    }
                });
            },
            {
                threshold: 0.2, // Trigger when 20% of the section or element is visible
            }
        );

        // Observe the heading and each logo item
        observer.observe(heading);
        logoItems.forEach((logo) => observer.observe(logo));
    });


    

    document.addEventListener("DOMContentLoaded", function () {
    const boxes = document.querySelectorAll(".why-choose-us h2, .box-item");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); // Stop observing after animation
            }
        });
    }, { threshold: 0.2 }); // Trigger when 20% of the element is visible

    boxes.forEach(box => observer.observe(box));
});
    </script>
</body>
</html>
