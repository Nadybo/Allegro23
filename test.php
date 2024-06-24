<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карусель карточек</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .carousel-container {
            width: 60%;
            height: 600px;
            perspective: 3000px;
            position: relative;
        }
        .carousel {
            display: flex;
            justify-content: center;
            transform-style: preserve-3d;
            width: 100%;
        }
        .carousel-item {
            width: 300px;
            margin: 0 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            text-align: center;
            position: absolute;
            transform-origin: center center;
            transform: translate(-50%, -50%);
            transition: transform 0.8s ease, border-color 0.9s ease;
        }
        .carousel-item.front-card {
            border: 1px solid  #BA83FF;
        }
        .block-title-number {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .block-title-number h3{
            margin: 10px 0 0 10px;
        }
        .block-number {
            width: 48px;
        aspect-ratio: 1;

        display: flex;
        justify-content: center;
        color: white;
        font-size: 26px;
        background-color: #BA83FF;
        border-radius: 7px;

        align-items: center;

        margin-bottom: 20px;
        }
        .text-info {
            font-size: 1em;
            color: #666;
            text-align: left;
        }
        .carousel-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 120px;
        }
        .carousel-nav button {
            background: none;
            font-size: 2em;
            cursor: pointer;
            border: none;
            &:hover{
                border-radius: 7px;
                background-color: #BA83FF;
            }
        }
    </style>
</head>
<body>
    <div class="carousel-container">
        <div class="carousel" id="carousel">
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">1</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">2</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">3</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">4</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">5</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
            <div class="carousel-item">
                <div class="block-title-number">
                    <p class="block-number">6</p>
                    <h3>Быстрая доставка</h3>
                </div>
                <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
            </div>
        </div>
        <div class="carousel-nav">
            <div>
            <button id="prev">&#10094;</button>
            </div>
            <div>
            <button id="next">&#10095;</button>
            </div>
            
        </div>
    </div>
    <script>
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const items = carousel.getElementsByClassName('carousel-item');
        const totalItems = items.length;
        let currentIndex = 0;

        function updateCarousel() {
            const angle = 360 / totalItems;
            for (let i = 0; i < totalItems; i++) {
                const item = items[i];
                const rotateY = angle * (i - currentIndex);
                item.style.transform = `rotateY(${rotateY}deg) translateZ(400px)`;
                item.classList.toggle('front-card', i === currentIndex);
            }
            prevButton.style.visibility = currentIndex === 0 ? 'hidden' : 'visible';
            nextButton.style.visibility = currentIndex === totalItems - 1 ? 'hidden' : 'visible';
        }

        function handleClick(direction) {
            if (direction === 'next' && currentIndex < totalItems - 1) {
                currentIndex++;
            } else if (direction === 'prev' && currentIndex > 0) {
                currentIndex--;
            }
            updateCarousel();
        }

        function handleWheel(event) {
            if (event.deltaY > 0 && currentIndex < totalItems - 1) {
                currentIndex++;
            } else if (event.deltaY < 0 && currentIndex > 0) {
                currentIndex--;
            }
            updateCarousel();
        }

        nextButton.addEventListener('click', () => handleClick('next'));
        prevButton.addEventListener('click', () => handleClick('prev'));
        carousel.addEventListener('wheel', handleWheel);

        updateCarousel();
    </script>
</body>
</html>
