<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <title>Регистрация</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
    <form class="registration">
        <h1>Регистрация</h1>
        <input class="form-field" placeholder="Организация" type="text" required>
        <input class="form-field" placeholder="Фамилия" type="text" required>
        <input class="form-field" placeholder="Имя" type="text" required>
        <input class="form-field" placeholder="Отчество" type="text" required>
        <input class="form-field" placeholder="Телефон" type="tel" required>
        <input class="form-field" placeholder="Логин" type="text" required>
        <input class="form-field" placeholder="Пароль" type="password" required>
        <div class="checkbox-container">
        <input class="form-checkbox" type="checkbox">
        <p>Я соглашаюсь с политикой <a href="#">конфиденциальности</a></p>
        </div>
        <button class="registration-button" type="submit">Создать аккаунт</button>
        <p>Уже есть аккаунт?<a href="./authorization.php"> Авторизация</a></p>
    </form>
    </div>
    <script src="./JS/script.js"></script>
</body>
</html>