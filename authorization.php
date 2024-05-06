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
    <div class="other-body">
    <form class="authorization">
        <h1>Регистрация</h1>
        <input class="form-field" placeholder="Логин" type="text" required>
        <input class="form-field" placeholder="Пароль" type="password" required>
        <div class="checkbox-container">
        <input class="form-checkbox" type="checkbox" required>
        <p>Запомнить меня</p>
        </div>
        <button class="registration-button" type="submit">Войти</button>
        <a class="create-account" href="./registration.php">Создать аккаунт</a>
        <a href="#">Забыли пароль?</a>
    </form>
    </div>
    <script src="./JS/main.js"></script>
</body>
</html>