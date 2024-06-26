<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div>
    <a class="exit-link" href="./viewing-an-order.php">Назад</a>
    <button class="print-screen" onclick="window.print();">Печать</button>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Уведомление о вручении отправителя</h2>
        <p>номер отслеживания: ОП-2024-04-01-3142</p>
    </div>
    <div class="data-container">
            <label class="data-item" for="">
                <p>Дата заказа</p>
                <input type="text" name="" id="">
            </label>
            <label class="data-item" for="">
                <p>Время</p>
                <input type="text" name="" id="">
            </label>
            <label class="data-item" for="">
                <p>Заказчик</p>
                <input type="number" name="" id="">
            </label>
            <label class="data-item" for="">
                <p>Тариф</p>
                <input type="number" name="" id="">
            </label>
            <label class="data-item" for="">
                <p>Вес отправления</p>
                <input type="number" name="" id="">
            </label>
    </div>

        <!-- Container 1 -->
        <h3>Отправитель</h3>
    <div class="form-container">
        <div class="form-items">
            
            <label for="">
                    <p>Организация</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Адрес</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Проезд</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Телефон</p>
                    <input type="tel">
                </label>
                <label for="">
                    <p>Задание курьеру</p>
                    <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="form-items">
        <label for="">
                    <p>ФИО отправителя</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Подпись</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Вес отправления</p>
                    <input type="text">
                </label>
                <P class="agreement">
                    Своей подписью я подтверждаю,что отправление не содержит предметы,<br>
                    запрещенные к доставке на территории РФ, отправление отправлено,<br>
                    повреждения отсуствуют<br>
                </P>
                <div class="data-time">
                    <label for="">
                        <p>Дата</p>
                        <input type="text">
                    </label>
                    <label for="">
                        <p>Время</p>
                        <input type="text">
                    </label>
                </div>
        </div>
    </div>

    <!-- Container 2 -->
    <h3>Отправитель-получатель</h3>
    <div class="form-container">
    <div class="form-items">
        
            <label for="">
                    <p>Организация</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Адрес</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Проезд</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Телефон</p>
                    <input type="tel">
                </label>
                <label for="">
                    <p>Задание курьеру</p>
                    <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="form-items">
        <label for="">
                    <p>ФИО получателя</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Подпись</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Вес отправления</p>
                    <input type="text">
                </label>
                <P class="agreement">
                    Своей подписью я подтверждаю,что отправление не содержит предметы,<br>
                    запрещенные к доставке на территории РФ, отправление отправлено,<br>
                    повреждения отсуствуют<br>
                </P>
                <div class="data-time">
                    <label for="">
                        <p>Дата</p>
                        <input type="text">
                    </label>
                    <label for="">
                        <p>Время</p>
                        <input type="text">
                    </label>
                </div>
        </div>
    </div>

    <!-- Container 3 -->
    <h3>Получатель</h3>
    <div class="form-container">
    <div class="form-items">
        
            <label for="">
                    <p>Организация</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Адрес</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Проезд</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Телефон</p>
                    <input type="tel">
                </label>
                <label for="">
                    <p>Задание курьеру</p>
                    <textarea name="Сообщения" id="" cols="30" rows="10"></textarea>
            </label>
        </div>
        <div class="form-items">
        <label for="">
                    <p>ФИО получателя</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Подпись</p>
                    <input type="text">
                </label>
                <label for="">
                    <p>Вес отправления</p>
                    <input type="text">
                </label>
                <P class="agreement">
                    Своей подписью я подтверждаю,что отправление не содержит предметы,<br>
                    запрещенные к доставке на территории РФ, отправление отправлено,<br>
                    повреждения отсуствуют<br>
                </P>
                <div class="data-time">
                    <label for="">
                        <p>Дата</p>
                        <input type="text">
                    </label>
                    <label for="">
                        <p>Время</p>
                        <input type="text">
                    </label>
                </div>
        </div>
    </div>

    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
    body{
        width: 820px;
        height: fit-content;

    }
    .data-time input{
        width:180px;
    }
    input{
        width: 400px;
        height: 25px;
        padding-left: 2px;
    }
    .data-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }  
    .data-item{
       width: 50%; 
       margin-top: 10px;
    }
    textarea{
        width: 400px;
        height: 50px;
    }
    .form-container{
        padding: 5px;
        border: 1px solid black;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .form-container p{
        font-weight: bold;
    }
    h3{
        margin-top: 5px;
    }
    .agreement{
        margin-top: 10px;
        font-size: 12px;
    }
    .data-time{
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }
    .print-screen{
        width: 100px;
        height: 30px;
        background-color: green;
        color: white;
        margin-bottom: 50px;
        border: none;
    }
    .exit-link{
        padding: 7px;
        width: 100px;
        height: 30px;
        background-color: blue;
        color: white;
        text-decoration: none;
    }
    </style>
    <style type="text/css" media="print">
        button {display: none; }
        .exit-link {display: none;}
    </style>
</div> 
</body>
</html>