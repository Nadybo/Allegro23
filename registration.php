<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/index.css" media="screen" />
    <title>Alegro23</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <form class="registration">
        <h1>Регистрация</h1>
        <input class="form-field" placeholder="Организация" type="text">
        <input class="form-field" placeholder="Фамилия" type="text">
        <input class="form-field" placeholder="Имя" type="text">
        <input class="form-field" placeholder="Отчество" type="text">
        <input class="form-field" placeholder="Телефон" type="tel">
        <input class="form-field" placeholder="Логин" type="text">
        <input class="form-field" placeholder="Пароль" type="password">
        <div class="checkbox-container">
        <input class="form-checkbox" type="checkbox">
        <p>Я соглашаюсь с политикой <a href="#">конфиденциальности</a></p>
        </div>
        <button class="registration-button" type="submit">Создать аккаунт</button>
        <p>Уже есть аккаунт?<a href="./authorization.php"> Авторизация</a></p>
    </form>
    <script src="./JS/main.js"></script>
</body>
</html>