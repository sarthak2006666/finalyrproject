<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Animation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f58220;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            zoom: 75%;
        }

        .slider {
            width: 80%;
            max-width: 1200px;
            position: relative;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            text-align: center;
            color: #fff;
        }

        .slide h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .slide img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .slide p {
            max-width: 500px;
            margin: 0 auto 2rem auto;
            line-height: 1.5;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #fff;
            cursor: pointer;
            user-select: none;
            z-index: 10;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <h1>Digital innovation company that creates progress 1</h1>
                <img src="profile.webp" alt="Person 1">
                <p>Shree Dev Jom Transport provided us with exceptional service. Their team was punctual, handled everything with care, and made the entire relocation process seamless. Highly recommended!</p>
            </div>
            <div class="slide">
                <h1>Digital innovation company that creates progress 2</h1>
                <img src="profile.webp" alt="Person 2">
                <p>I used Shree Dev Jom Transport for relocating my household goods. Their staff was friendly and professional, and everything reached on time without any damage. Very happy with their service.</p>
            </div>
            <div class="slide">
                <h1>Digital innovation company that creates progress 3</h1>
                <img src="profile.webp" alt="Person 3">
                <p>The transport services were very affordable compared to others in the market. The efficiency and professionalism of their team were impressive. Will definitely use their services again.</p>
            </div>
        </div>
        <div class="arrow left">&#8592;</div>
        <div class="arrow right">&#8594;</div>
    </div>

    <script>
        const slides = document.querySelector('.slides');
        const slideCount = document.querySelectorAll('.slide').length;
        const leftArrow = document.querySelector('.arrow.left');
        const rightArrow = document.querySelector('.arrow.right');
        let currentIndex = 0;

        function updateSlidePosition() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function showNextSlide() {
            currentIndex = (currentIndex + 1) % slideCount;
            updateSlidePosition();
        }

        function showPreviousSlide() {
            currentIndex = (currentIndex - 1 + slideCount) % slideCount;
            updateSlidePosition();
        }

        rightArrow.addEventListener('click', showNextSlide);
        leftArrow.addEventListener('click', showPreviousSlide);

        // Automatic sliding every 5 seconds
        setInterval(showNextSlide, 5000);
    </script>
</body>
</html>
