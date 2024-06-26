<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Главная</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
        <div class="container-title">
            <div class="content-title">
                <h1>Быстрая и надежная доставка деловой документации пешими курьерами по Москве</h1>
                <p>Гарантируем конфиденциальность и оперативность каждой доставки. Доверьте важные документы профессионалам</p>
                <button id="openModalBtn2">Оставить заявку</button>
            </div>
            <div class="title-items">
                <div class="images-container">
                    <div class="images-title">
                        <img src="./images/Group 122.png"alt="">
                        <p>Заказ</p>
                    </div>
                    <img class="outside-image" src="./images/outline-order-delivered-to-the-location 1.png" alt="">
                </div>
                <div class="images-container">
                    <div class="images-title">
                        <img src="./images/Group 122.png"  alt="">
                        <p>Доставка</p>
                    </div>
                    <img class="outside-image" src="./images/destination.png" alt="">
                </div>
                <div class="images-container">
                    <div class="images-title">
                        <img src="./images/Group 122.png" alt="">
                        <p>Получение</p>
                    </div>
                <img class="outside-image" src="./images/delivery.png" alt="">
                </div>
            </div>
        </div>
        <div class="container-delevery">
            <div class="delevery-items">
                <h1>Доставка Деловой Документации: Быстро, Надежно, Пешими Курьерами</h1>
                <p>Наши пешеходные курьеры обеспечивают быструю и надежную доставку деловой документации в Москве. 
                    Мы гарантируем конфиденциальность и оперативность. Узнайте больше о наших услугах сейчас!</p>
            </div>
            <img src="./images/outline-recruitment-agent-analyzing-candidates-resumes 1.png" alt="">
        </div>
        <div class="container-advantages">
            <h1>Доставка деловой документации пешими курьерами имеет целый ряд преимуществ, которые делают этот способ передачи документов удобным и эффективным:</h1>
            <div class="advantage-blocks">
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">1</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">2</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">3</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">4</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">5</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
                <div class="block">
                    <div class="block-title-number">
                        <p class="block-number">6</p>
                        <h3>Быстрая доставка</h3>
                    </div>
                    <p class="text-info">Пешим курьерам не нужно преодолевать пробки на дорогах, поэтому они могут оперативно доставить документы в нужное место без значительных задержек.</p>
                </div>
            
            </div>
            <button id="openModalBtn3" class="button-submit-application">Оставить заявку</button>
        </div>
        <div class="container-feedback">
            <div class="feedback-title">
                <h1>Свяжитесь с нами</h1>
                <p>Оставьте контакты, чтобы обсудить проект<br> и условия сотрудничества</p>
            </div>
            <div class="feedback-items">
                <form class="feedback-form" action="">
                    <input placeholder="Ваше имя" type="text" required>
                    <input placeholder="Компания" type="text" required>
                    <input placeholder="Email" type="email" required>
                    <textarea name="" id="">
                    </textarea>
                    <div class="checkbox-container">
                    <input class="form-checkbox" type="checkbox">
                    <p>Я соглашаюсь с политикой <a href="#">конфиденциальности</a></p>
                    </div>
                    <button type="submit" class="submit-application">Оставить заявку</button>
                </form>
            </div> 
        </div>
    </div>
    <div id="modal2" class="windowModal">
        <div class="modal-cntainer">
            <span id="modal2" class="close">&times;</span>
            <form class="feedback-form" action="">
                <input placeholder="Ваше имя" type="text" required>
                <input placeholder="Компания" type="text" required>
                <input placeholder="Email" type="email" required>
                <textarea name="" id="">
                </textarea>
                <div class="checkbox-container">
                <input class="form-checkbox" type="checkbox">
                <p>Я соглашаюсь с политикой <a href="#">конфиденциальности</a></p>
                </div>
                <button type="submit" class="submit-application">Оставить заявку</button>
            </form>
        </div>
    </div>
    <?php
        require_once 'footer.php';
    ?>
    <script src="/JS/indexPageScript.js"></script>
</body>
</html>