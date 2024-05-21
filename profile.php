<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Личный кабинет</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
        <div class="profile-container">
            <div class="user-items">
                <div class="user-data">
                    <div class="user-photo-container">
                        <img class="user-photo" src="./images/user.jpg" alt="user">
                    </div>
                    <div class="user-data-container">
                        <ul>
                            <p>Организация:</p>
                            <p>Фамилия:</p>
                            <p>Имя:</p>
                            <p>Телефон:</p>
                            <p>Логин:</p>
                            <p>Статус:</p>
                            <button class="log-out-btn">выйти из аккоунта</button>
                        </ul>
                    </div>

                </div>
                <form class="edit-data" action="">
                    <input class="change-user-data" placeholder="Организация" type="text" name="" id="">
                    <input class="change-user-data" placeholder="Фамилия" type="text" name="" id="">
                    <input class="change-user-data" placeholder="Имя" type="text" name="" id="">
                    <input class="change-user-data" placeholder="Отчество"  type="text" name="" id="">
                    <input class="change-user-data" placeholder="Телефон" type="tel" name="" id="">
                    <input class="change-user-data" placeholder="Логин" type="text" name="" id="">
                    <input class="change-user-data" placeholder="Пароль" type="password" name="" id="">
                    <button>Сохранить</button>
                </form>
            </div>

            <div class="history-table">
            <table>
            <tr>
                <th>Компания</th>
                <th>Адрес</th>
                <th>Проезд</th>
                <th>Телефон</th>
                <th>ФИО контакта</th>
            </tr>
            <tr>
                <td>ОП-2024-04-27-3369</td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
            </tr>
            </table>
            </div>
        </div>

    </div>
    <!-- <script src="./JS/script.js"></script> -->
</body>
</html>