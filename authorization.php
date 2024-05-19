<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <title>Авторизация</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
    <form class="authorization">
        <h1>Регистрация</h1>
        <input class="form-field" placeholder="Логин" type="text" required>
        <input class="form-field" placeholder="Пароль" type="password" required>
        <div class="checkbox-container">
        <input class="form-checkbox" type="checkbox">
        <p>Запомнить меня</p>
        </div>
        <button class="registration-button" type="submit">Войти</button>
        <a class="create-account" href="./registration.php">Создать аккаунт</a>
        <a href="#">Забыли пароль?</a>
    </form>
    </div>
    <script src="./JS/script.js"></script>
</body>
</html>