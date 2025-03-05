<?php
// Simple PHP page for 'Why Choose Us?' circular diagram layout
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Shree Dev Jom Transport</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            zoom: 75%;
        }
        .circle-container {
            background-color: #064b76;
            position: relative;
            width: 500px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            transform-style: preserve-3d;
        }

        .circle-box {
            position: absolute;
            width: 190px;
            height: 190px;
            background-color: #064b76;
            color: white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            text-align: center;
            padding: 20px;
            transform-origin: center;
            transition: all 0.3s ease-in-out;
        }
        .circle-box i {
            font-size: 60px;
            margin-bottom: 10px;
        }
        .circle-box .description {
            font-size: 15px;
            line-height: 1.4;
        }

        /* Positioning the circles in a circular path using absolute positioning */
        .circle-box:nth-child(1) {
            top: 0;
            left: 50%;
            transform: translateX(-40%) translateY(-200px);
        }
        .circle-box:nth-child(2) {
            top: 50%;
            left: 100%;
            transform: translateX(-20%) translateY(50%);
        }
        .circle-box:nth-child(3) {
            bottom: 0;
            left: 50%;
            transform: translateX(-70%) translateY(180px);
        }
        .circle-box:nth-child(4) {
            top: 50%;
            left: 0;
            transform: translateX(-80%) translateY(0%);
        }
        .circle-box:nth-child(5) {
            top: 20%;
            left: 80%;
            transform: translateX(40%) translateY(-50%);
        }
        .circle-box:nth-child(6) {
            top: 20%;
            left: 20%;
            transform: translateX(-120%) translateY(-90%);
        }

        /* Center Image */
        .center-image {
            position: absolute;
            width: 300px;
            height: 300px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Gradient effect */
        .circle-box {
            background: linear-gradient(45deg, #4CAF50, #388E3C);
            border: 1px solid #388E3C;
        }

        /* Section Header */
        .section-header {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
            margin-left: -100px; 
            text-align: left;
        }

    </style>
</head>
<body>

    <div class="section-header">Why Choose Shree Dev Jom Transport?</div>

    <div class="circle-container">
        <!-- Circle Boxes -->
        <div class="circle-box">
            <i class="fas fa-cogs"></i>
            <div class="description">
                <strong>Rich Industry Experience</strong><br>
                Years of experience in managing diverse transportation projects.
            </div>
        </div>

        <div class="circle-box">
            <i class="fas fa-laptop"></i>
            <div class="description">
                <strong>Advanced Technology</strong><br>
                Using technology to optimize fleet management and provide real-time support.
            </div>
        </div>

        <div class="circle-box">
            <i class="fas fa-clock"></i>
            <div class="description">
                <strong>On Time, Every Time</strong><br>
                Ensuring punctuality for smooth business operations.
            </div>
        </div>

        <div class="circle-box">
            <i class="fas fa-dollar-sign"></i>
            <div class="description">
                <strong>Competitive Pricing</strong><br>
                Transparent pricing for maximum value for your investment.
            </div>
        </div>

        <div class="circle-box">
            <i class="fas fa-shield-alt"></i>
            <div class="description">
                <strong>Reliability and Safety</strong><br>
                Adherence to industry safety standards and advanced security measures.
            </div>
        </div>

        <div class="circle-box">
            <i class="fas fa-clipboard-check"></i>
            <div class="description">
                <strong>Hassle-Free Services</strong><br>
                Providing contract-based full-load services for smooth logistics.
            </div>
        </div>

        <!-- Center Image -->
        <img src="truckd.jpg" class="center-image" alt="Transport Logo">

    </div>

</body>
</html>
