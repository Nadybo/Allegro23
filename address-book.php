<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Адресная книга</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '\header.php' ?>
    <div class="other-body">
    <div class="address-book">
        <div class="search-items">
            <input id="search-field-address-book" onkeyup="tableSearchAddressBook()" placeholder="Поиск" type="text">
            <button class="rest-data-search" onclick="resetSearchAddressBook()" value="Clear" title="clear text in search area"><i class="fa-solid fa-arrows-rotate"></i></button>
        </div>
        <table id="address-book-table">
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
                <td><button id="address-edit-btn" href=""><img class="table-icon" src="./icons/pencil-edit.svg"></img></button></td>
                <td><button id="address-delete-btn" href=""><img class="table-icon" src="./icons/trash-alt.svg"></img></button></td>
            </tr>
        </table>
    </div>
    </div>
    <div id="myModal" class="modal-edit-address">
  <div class="edit-items">
    <div class="close-btn-title">
        <p>Редактор адресная книг</p>
        <span class="close">&times;</span>
    </div>
    <div class="address-data">
        <input placeholder="Компания" type="text">
        <input placeholder="Адрес" type="text">
        <input placeholder="Проезд" type="text">
        <input placeholder="Телефон" type="tel">
        <input placeholder="ФИО контакта" type="text">
        <button>Сохранить изменениия</button>
    </div>
    </div>
    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("address-edit-btn");
        var span = document.getElementsByClassName("close")[0];

        function openModal() {
            modal.style.display = "block";
        }

        function closeModal() {
            modal.style.display = "none";
        }

        span.onclick = function() {
            closeModal();
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }

        btn.onclick = function() {
            openModal();
        }
    </script>
    <script src="./JS/script.js"></script>
</body>
</html>