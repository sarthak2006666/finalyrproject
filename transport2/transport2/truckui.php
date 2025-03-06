<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAN Trucks - Professional Transport Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .industry-competence {
    background-color: #f9f9f9;
    padding: 40px 0;
    margin: 40px 0;
}

.competence-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 40px;
    padding: 0 20px;
}

.competence-image {
    flex: 1;
    border-radius: 12px;
    overflow: hidden;
}

.competence-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 12px;
}

.competence-content {
    flex: 1;
    padding: 20px 0;
}

.competence-title {
    font-size: 36px;
    font-weight: 700;
    color: #124559;
    margin: 0;
    line-height: 1.2;
}

.competence-title span {
    font-weight: 700;
}

.competence-subtitle {
    font-size: 36px;
    font-weight: 700;
    color: #e97b4d;
    margin: 0 0 15px 0;
    line-height: 1.2;
}

.competence-description {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.competence-features {
    display: flex;
    gap: 30px;
    margin-bottom: 30px;
}

.feature-column {
    flex: 1;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.feature-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    background-color: #e97b4d;
    color: white;
    border-radius: 50%;
    font-size: 14px;
    margin-right: 10px;
    font-style: normal;
}

.feature-text {
    color: #555;
    font-size: 15px;
}

.cta-button {
    display: inline-block;
    background-color: #e97b4d;
    color: white;
    padding: 12px 30px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #d86a3e;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .competence-container {
        flex-direction: column;
    }
    
    .competence-features {
        flex-direction: column;
        gap: 0;
    }
}
        body {
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            height: 400px;
            overflow: hidden;
            background-color: #333;
        }
        
        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
        }
        
        .feature-points {
            position: absolute;
            left: 50px;
            top: 100px;
            color: white;
        }
        
        .feature-point {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .feature-number {
            background-color: #ffcc00;
            color: #333;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .feature-text {
            font-size: 16px;
            max-width: 300px;
        }
        
        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            padding: 20px;
        }
        
        .info-box {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .info-box img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        
        .info-box h3 {
            margin-bottom: 10px;
            color: #333;
        }
        
        .info-box p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
        
        /* Yellow Box */
        .yellow-box {
            background-color: #ffcc00;
            padding: 30px;
            color: #333;
        }
        
        .yellow-box h2 {
            margin-bottom: 15px;
        }
        
        .yellow-box p {
            line-height: 1.6;
        }
        
        /* Dark Box */
        .dark-box {
            background-color: #222;
            color: white;
            padding: 30px;
            width: 100%;
        }
        
        .dark-box h2 {
            margin-bottom: 15px;
            text-align: center;
        }
        
        .dark-box p {
            line-height: 1.6;
            color: #ccc;
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* .button {
            display: inline-block;
            background-color: #ffcc00;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
        } */
        
        /* Truck Gallery */
        .truck-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            padding: 20px;
        }
        
        .truck-item {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .truck-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .truck-item:hover img {
            transform: scale(1.05);
        }
        
        .truck-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 10px;
            font-size: 14px;
        }
        
        /* Read More Section */
        .read-more {
            background-color: #ffcc00;
            padding: 30px;
            text-align: center;
        }
        
        .read-more h2 {
            margin-bottom: 15px;
        }
        
        .read-more .button {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    // Sample data that would typically come from a database
    $features = [
        ["Experience unmatched power and efficiency with our new MAN TGX series"],
        ["Advanced driver assistance systems for improved safety and comfort"],
        ["Industry-leading fuel economy with innovative engine technology"]
    ];
    
    $infoBoxes = [
        [
            "image" => "407.jpeg",
            "title" => "TGX Series",
            "content" => "The flagship of our long-haul fleet, designed for maximum efficiency and driver comfort."
        ],
        [
            "image" => "truck2.jpg",
            "title" => "TGS Series",
            "content" => "Built for heavy-duty applications, combining power with versatility for various industries."
        ]
    ];
    
    $truckGallery = [
        ["image" => "407.jpeg", "caption" => "Tata 407"],
        ["image" => "2059.jpeg", "caption" => "Eicher 20.59"],
        ["image" => "2110.jpeg", "caption" => "Eicher 21.10"],
        ["image" => "2114.jpeg", "caption" => "Eicher 2114"],
        ["image" => "2119.jpeg", "caption" => "Eicher 2119"],
        ["image" => "2159.jpeg", "caption" => "Eicher 21.59"],
        ["image" => "ashokdost.jpeg", "caption" => "Ashok Leyland Dost"],
        ["image" => "16131.png", "caption" => "Tata 1613"]
    ];
    ?>

    <!-- Hero Section with MAN Truck -->

    <!-- Info Grid Section -->
    <!-- <div class="container">
        <div class="info-grid">
            <?php foreach($infoBoxes as $box): ?>
            <div class="info-box">
                <img src="<?php echo $box['image']; ?>" alt="<?php echo $box['title']; ?>">
                <h3><?php echo $box['title']; ?></h3>
                <p><?php echo $box['content']; ?></p>
            </div>
            <?php endforeach; ?>
            
            <div class="yellow-box">
                <h2>MAN Truck Innovation</h2>
                <p>Discover the latest innovations in transport technology, designed to make your fleet more efficient, sustainable, and profitable. Our engineering excellence continues to push the boundaries of what's possible.</p>
            </div>
        </div>
    </div> -->
        
    <!-- Dark Box Section - Container Removed -->
    <div class="dark-box">
        <h2>On the road to success</h2>
        <p>Partner with MAN to transform your transport operations. Our comprehensive solutions go beyond just vehicles, offering complete mobility services tailored to your business needs.</p>
        <!-- <a href="#" class="button">Learn More</a> -->
    </div>
    
    <div class="container">
        <!-- Truck Gallery -->
        <div class="truck-gallery">
            <?php foreach($truckGallery as $truck): ?>
            <div class="truck-item">
                <img src="<?php echo $truck['image']; ?>" alt="<?php echo $truck['caption']; ?>">
                <div class="truck-caption"><?php echo $truck['caption']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- madhla jagha -->

<!-- Industry Competence Section HTML -->
<section class="industry-competence">
    <div class="competence-container">
        <div class="competence-image">
            <img src="logistics-image.jpg" alt="Logistics transportation with truck and airplane">
        </div>
        <div class="competence-content">
            <h2 class="competence-title">Our industry-<span>explicit</span></h2>
            <h3 class="competence-subtitle">competence</h3>
            <p class="competence-description">
                Lorem ipsum is simply dummy text of the printing industry and is consistently used as filler text. It has survived not only five centuries, but it remains.
            </p>
            <div class="competence-features">
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Freight Forwarding</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Multimodal Services</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Last Mile Delivery</span>
                    </div>
                </div>
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Just-in-time Delivery</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Reverse Logistics Solutions</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">24/7 Customer Support</span>
                    </div>
                </div>
            </div>
            <a href="#" class="cta-button">Get Info Now</a>
        </div>
    </div>
</section>
<section class="industry-competence">
    <div class="competence-container reversed">
        <div class="competence-content">
            <h2 class="competence-title">Our industry-<span>explicit</span></h2>
            <h3 class="competence-subtitle">competence</h3>
            <p class="competence-description">
                Lorem ipsum is simply dummy text of the printing industry and is consistently used as filler text. It has survived not only five centuries, but it remains.
            </p>
            <div class="competence-features">
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Freight Forwarding</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Multimodal Services</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Last Mile Delivery</span>
                    </div>
                </div>
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Just-in-time Delivery</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Reverse Logistics Solutions</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">24/7 Customer Support</span>
                    </div>
                </div>
            </div>
            <a href="#" class="cta-button">Get Info Now</a>
        </div>
        <div class="competence-image">
            <img src="logistics-image.jpg" alt="Logistics transportation with truck and airplane">
        </div>
    </div>
</section>

<section class="industry-competence">
    <div class="competence-container">
        <div class="competence-image">
            <img src="logistics-image.jpg" alt="Logistics transportation with truck and airplane">
        </div>
        <div class="competence-content">
            <h2 class="competence-title">Our industry-<span>explicit</span></h2>
            <h3 class="competence-subtitle">competence</h3>
            <p class="competence-description">
                Lorem ipsum is simply dummy text of the printing industry and is consistently used as filler text. It has survived not only five centuries, but it remains.
            </p>
            <div class="competence-features">
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Freight Forwarding</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Multimodal Services</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Last Mile Delivery</span>
                    </div>
                </div>
                <div class="feature-column">
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Just-in-time Delivery</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">Reverse Logistics Solutions</span>
                    </div>
                    <div class="feature-item">
                        <i class="feature-icon">✓</i>
                        <span class="feature-text">24/7 Customer Support</span>
                    </div>
                </div>
            </div>
            <a href="#" class="cta-button">Get Info Now</a>
        </div>
    </div>
</section>

        <!-- Read More Section -->
        <div class="read-more">
            <h2>Need to know more?</h2>
            <a href="#" class="button">Contact Us</a>
        </div>
    </div>

    <?php
    // Footer would typically be included here
    // include 'footer.php';
    ?>
</body>
</html>