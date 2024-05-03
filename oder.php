<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/index.css" media="screen" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Orders</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="orders-conyainer">
        <div class="sort-container">
            <div class="sort-items">
                <label for="">
                    <p>От</p>
                    <input type="date">
                </label>
                <label for="">
                    <p>До</p>
                    <input type="date">
                </label>
                <button class="sort-button">Фильтр <img src="./icons/sort.svg" style=" width: 16px; aspect-ratio: 1; margin-left: 5px;" alt=""></button>
            </div>
            <div class="search-items">
                <input type="text">
                <button><img src="./icons/search.svg" style=" width: 16px; aspect-ratio: 1;"  alt=""></button>
            </div>
        </div>
        <table>
            <tr>
                <th>Номер заказа</th>
                <th>Дата заказа</th>
                <th>Время заказа</th>
                <th>Отправитель</th>
                <th>Получатель</th>
                <th>Проезд</th>
                <th>Тариф</th>   
            </tr>
            <tr>
                <td><a href="./viewing-an-order.php">ОП-2024-04-27-3369</a></td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td></td>
                <td>Рабочий</td>
            </tr>
            <tr>
                <td><a href="#">ОП-2024-04-27-3369</a></td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td></td>
                <td>Рабочий</td>
            </tr>
            <tr>
                <td><a href="#">ОП-2024-04-27-3369</a></td>
                <td>2024-04-27</td>
                <td>09:22:51</td>
                <td>ФортеИнвест АО</td>
                <td>ФортеИнвест АО</td>
                <td></td>
                <td>Рабочий</td>
            </tr>
        </table>
        
    </div>
    <script src="./JS/main.js"></script>
</body>
</html>