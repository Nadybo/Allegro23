<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/index.css" media="screen" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Alegro23</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="other-body">
    <div class="address-book">
        <div class="search-items">
                <input placeholder="Поиск" type="text">
                <!-- <button><img src="./icons/search.svg" style=" width: 16px; aspect-ratio: 1;"  alt=""></button> -->
        </div>
        <table>
            <tr>
                <th>Компания</th>
                <th>Адрес</th>
                <th>Проезд</th>
                <th>Телефон</th>
                <th>ФИО контакта</th>
                <th>Изменить</th>
                <th>Удалить</th>   
            </tr>
            <tr>
                <td>ОП-2024-04-27-3369</td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td><a href=""><img class="table-icon" src="./icons/pencil-edit.svg"></img></a></td>
                <td><a href=""><img class="table-icon" src="./icons/trash-alt.svg"></img></a></td>
            </tr>
            <tr>
                <td>ОП-2024-04-27-3369</td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td><a href=""><img class="table-icon" src="./icons/pencil-edit.svg"></img></a></td>
                <td><a href=""><img class="table-icon" src="./icons/trash-alt.svg"></img></a></td>
            </tr>
            <tr>
                <td>ОП-2024-04-27-3369</td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td><a href=""><img class="table-icon" src="./icons/pencil-edit.svg"></img></a></td>
                <td><a href=""><img class="table-icon" src="./icons/trash-alt.svg"></img></a></td>
            </tr>
        </table>
    </div>
    </div>
    <script src="./JS/main.js"></script>
</body>
</html>