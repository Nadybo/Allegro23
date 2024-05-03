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
    <div class="make-order-container">
        <div class="title-container">
            <h1>Оформление доставки</h1>
            <a href="./oder.php"><- Вернуться к списку заказов</a>
        </div>
        <div class="rate-container">
            <h3>Тариф</h3>
            <fieldset> 
                <label for="1">
                    <input class="rate-check" type="radio" id="1" name="drone" value="Быстрый" />
                        <div class="rate-items">
                        <h4>Быстрый</4>
                        <p>Заказ заберёт и доставит ближайший свободный курьер</p>
                        </div>   
                </label>
  
                <label  for="2">
                    <input class="rate-check" type="radio"  id="2" name="drone" value="Рабочий"/>
                        <div class="rate-items">
                        <h4>Рабочий</h4>
                        <p>Заказ заберёт и доставит ближайший свободный курьер</p>
                        </div>
                    </label>
                <label  for="3">
                    <input class="rate-check" type="radio" id="3" name="drone" value="На следующий день"/>
                    <div class="rate-items">
                        <h4>На следующий день</h4>
                        <p>Заказ заберёт и доставит ближайший свободный курьер</p></div>
                </label>
               
                <label for="4">
                    <input class="rate-check" type="radio" id="4" name="drone" value="За час!"/>
                    <div class="rate-items">
                        <h4>За час!</h4>
                        <p>Заказ заберёт и доставит ближайший свободный курьер</p></div>
                </label>
               
                <label for="5">
                    <input class="rate-check" type="radio" id="5" name="drone" value="Индивидуальный"/>
                    <div class="rate-items">
                        <h4>Индивидуальный</h4>
                        <p>Заказ заберёт и доставит ближайший свободный курьер</p>
                    </div>
                </label>
            </fieldset>
        </div>
        <div class="order-weight">
        <h3>Вес заказа</h3>
            <fieldset> 
                <label for="weight1">
                    <input class="weight-check" type="radio" id="weight1" name="weight" value="До 1 кг" />
                        <div class="weight-items">
                        <p>До 1 кг</p>
                        </div>   
                </label>
  
                <label  for="weight2">
                    <input class="weight-check" type="radio"  id="weight2" name="weight" value="До 5 кг"/>
                        <div class="weight-items">
                        <p>До 5 кг</p>
                        </div>
                    </label>
                <label  for="weight3">
                    <input class="weight-check" type="radio" id="weight3" name="weight" value="До 10 кг"/>
                    <div class="weight-items">
                        <p>До 10 кг</p>
                    </div>
                </label>
               
                <label for="weight4">
                    <input class="weight-check" type="radio" id="weight4" name="weight" value="До 15 кг"/>
                    <div class="weight-items">
                        <p>До 15 кг</p>
                    </div>
                </label>
            </fieldset>
        </div>
        <div class="data-container">
            <div class="data-items">
                <h3>Отправитель</h3>
                <label  for="">
                    <div class="input-with-button">
                    <input class="data-area" placeholder="Организация" type="text">
                    <a href="./address-book.php">Адресная книга</a>
                </div>
                </label>
                <label for="">
                    <input class="data-area" placeholder="Адрес" type="text">
                </label>
                <label for="">
                    <input class="data-area" placeholder="ФИО" type="text">
                </label>
                <label for="">
                    <input class="data-area" placeholder="Телефон" type="tel">
                </label>
                <label for="">
                    <textarea name="" id="" cols="30" rows="10">
                    </textarea>
                </label>
                <div class="checkbox-save">
                <input class="save-address-book" type="checkbox">
                <p>Сохранить в адресную книгу</p>
                </div>
            </div>
            <div class="data-items">
                <h3>Отправитель</h3>
                <label  for="">
                    <div class="input-with-button">
                    <input class="data-area" placeholder="Организация" type="text">
                    <a href="./address-book.php">Адресная книга</a>
                </div>
                </label>
                <label for="">
                    <input class="data-area" placeholder="Адрес" type="text">
                </label>
                <label for="">
                    <input class="data-area" placeholder="ФИО" type="text">
                </label>
                <label for="">
                    <input class="data-area" placeholder="Телефон" type="tel">
                </label>
                <label for="">
                    <textarea name="" id="" cols="30" rows="10">
                    </textarea>
                </label>
                <div class="checkbox-save">
                <input class="save-address-book" type="checkbox">
                <p>Сохранить в адресную книгу</p>
                </div>
                <button>Сделать заказ</button>
            </div>
        </div>
    </div>
    <script src="./JS/main.js"></script>
</body>
</html>