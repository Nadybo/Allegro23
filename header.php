<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/index.css" media="screen" />
</head>
<body>
    <div class="other-body">
    <header>
        <div class="sidebar-container">
            <button id="menuButton"><img src="./icons/bars.svg" alt="Меню"></button>
            <div id="sideMenu">
            <a  href="./index.php">Главная</a>
            <a  href="./oder.php">Заказы</a>
            <a  href="#">Статистика</a>
            <a  href="./address-book.php">Адресная книга</a>
            </div>
        </div>
        <a class="logo" href="index.php">
            <img src="./images/logo.jpg" alt="logo">
        </a>
        <nav class="navbar-container">
            <a class="navbar-items" href="./index.php">Главная</a>
            <a class="navbar-items" href="./oder.php">Заказы</a>
            <a class="navbar-items" href="#">Статистика</a>
            <a class="navbar-items" href="./address-book.php">Адресная книга</a>
        </nav>
        <div class="buttons-container">
        <a class="order-button" href="./make-an-order.php">Сделать заказ <img class="mini-icon" src="./icons/box.svg" alt="icon box"></a>
        <a class="personal-account" href="./profile.php">Личный кабинет <img class="mini-icon" src="./icons/user.svg" alt="icon user"></a>
        </div>
        <div class="icon-buttons-order">
        <a class="order-button" href="./make-an-order.php"><img class="mini-icon" src="./icons/box.svg" alt="icon box"></a>
        <a class="personal-account" href="./authorization.php"><img class="mini-icon" src="./icons/user.svg" alt="icon user"></a>
        </div>
    </header>
    </div>
    

    <script src="./JS/main.js"></script>
</body>
</html>