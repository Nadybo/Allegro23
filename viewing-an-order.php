<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style/styles.css" media="screen" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.png" />
    <title>Просмотр заказов</title>
</head>
<body>
    <div class="other-body">
    <div class="view-oder">
        <div class="control-buttons">
            <a href="./oder.php">Вернуться к заказам</a>
            <a href="./print-page.php">Распечатать</a>
        </div>
        <div class="number-order">
            <label for="">
                <p><b>Номер заказа:</b></p>
                <input class="order-id" type="text" value="455353234">
            </label>
            <div>
                <button class="edit-button">Удалить</button>
                <input type="submit" class="save-button" value="Сохранить">
            </div>
        </div>
        <div class="info-container">
            <label class="info-items" for="">
                <p>Дата заказа</p>
                <input type="date" name="" id="">
            </label>
            <label class="info-items" for="">
                <p>Время</p>
                <input type="time" name="" id="">
            </label>
            <label class="info-items" for="">
                <p>Заказчик</p>
                <input type="text" name="" id="">
            </label>
            <label class="info-items" for="tariff-select">
                <p>Тариф</p>
                <select id="tariff-select">
                    <option value="Быстрый">Быстрый</option>
                    <option value="Рабочий">Рабочий</option>
                    <option value="На следующий день">На следующий день</option>
                    <option value="За час!">За час!</option>
                    <option value="Индивидуальный">Индивидуальный</option>
                </select>
            </label>
        </div>
        <div class="blanks-container">
            <div class="blanks-items">
                <h2>Отправитель</h2>
                <label for="">
                    <p>Организация</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Адрес</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Проезд</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Телефон</p>
                    <input type="tel" required >
                </label>
                <label for="">
                    <p>Задание курьеру</p>
                    <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div class="blanks-items">
                <h2>Информация о вручении</h2>
                <label for="">
                    <p>ФИО отправителя</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Подпись</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Должность</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Отправление вручено курьеру</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Дата и время</p>
                    <input type="date">
                </label>
            </div>
            <div id="custom-tariff" class="hidden">
                <div class="blanks-items">
                    <h2>Отправитель-получатель</h2>
                    <label for="">
                        <p>Организация</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Адрес</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Проезд</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Телефон</p>
                        <input type="tel" required >
                    </label>
                    <label for="">
                        <p>Задание курьеру</p>
                        <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
                    </label>
                </div>
                <div class="blanks-items">
                    <h2>Информация о вручении</h2>
                    <label for="">
                        <p>ФИО отправителя</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Подпись</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Должность</p>
                        <input type="text" required >
                    </label>
                    <label for="">
                        <p>Отправление вручено курьеру</p>
                        <input type="text">
                    </label>
                    <label for="">
                        <p>Дата и время</p>
                        <input type="date" required >
                    </label>
                </div>
            </div>
            <div class="blanks-items">
                <h2>Получатель</h2>
                <label for="">
                    <p>Организация</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Адрес</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Проезд</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Телефон</p>
                    <input type="tel" required >
                </label>
                <label for="">
                    <p>Задание курьеру</p>
                    <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div class="blanks-items">
                <h2>Информация о вручении</h2>
                <label for="">
                    <p>ФИО отправителя</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Подпись</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Должность</p>
                    <input type="text" required >
                </label>
                <label for="">
                    <p>Отправление вручено курьеру</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Дата и время</p>
                    <input type="date" required >
                </label>
            </div>
    </div>
    </div>

    <script>
        document.getElementById('tariff-select').addEventListener('change', function () {
            var customTariffBlock = document.getElementById('custom-tariff');
            if (this.value === 'Индивидуальный') {
                customTariffBlock.style.display = 'flex';
            } else {
                customTariffBlock.style.display = 'none';
            }
        });
    </script>
</body>
</html>