<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/index.css" media="screen" />
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <form class="authorization">
        <h1>Регистрация</h1>
        <input class="form-field" placeholder="Логин" type="text">
        <input class="form-field" placeholder="Пароль" type="password">
        <div class="checkbox-container">
        <input class="form-checkbox" type="checkbox">
        <p>Запомнить меня</p>
        </div>
        <button class="registration-button" type="submit">Войти</button>
        <a class="create-account" href="./registration.php">Создать аккаунт</a>
        <a href="#">Забыли пароль?</a>
    </form>
    <script src="./JS/main.js"></script>
</body>
</html>