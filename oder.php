<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Заказы</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
        <div class="orders-conyainer">
            <div class="sort-container">
                <div class="sort-items">
                    <div>
                        <p>От</p>
                        <input type="date" id="start-date">
                    </div>
                    <div>
                        <p>До</p>
                        <input type="date" id="end-date">
                    </div>
                    <button onclick="dateRangeSearch()" class="sort-button">Фильтр</button>
                    <button class="rest-data-search" onclick="resetSearch()" value="Clear" title="clear text in search area"><i class="fa-solid fa-arrows-rotate"></i></button>
                </div>
                <div class="search-items">
                    <input id="search-order" onkeyup="tableSearch()" placeholder="Поиск" type="text">
                    <!-- <button><img src="./icons/search.svg" style=" width: 16px; aspect-ratio: 1;"  alt=""></button> -->
                </div>
            </div>
            <table id="orders-table">
                <tr>
                    <th>Номер заказа</th>
                    <th>Дата заказа</th>
                    <th>Время заказа</th>
                    <th>Отправитель</th>
                    <th>Получатель</th>
                    <th>Тариф</th>
                    <th>Статус</th>
                    <th>Изменить</th>   
                </tr>
                <tr>
                    <td><a href="./viewing-an-order.php">ОП-2024-04-27-3369</a></td>
                    <td>2024-04-27</td>
                    <td>09:22:51</td>
                    <td>ФортеИнвест АО</td>
                    <td>ФортеИнвест АО</td>
                    <td></td>
                    <td>Рабочий</td>
                    <td><a class="button-change" type="button" href="./viewing-an-order.php">Изменить</a></td>
                    
                </tr>
            </table>
        </div>
    </div>
    <script src="./JS/script.js"></script>
</body>
</html>