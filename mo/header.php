<?php
//Запускаем сессию
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Магазин одежды</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                "use strict";
                //================ Проверка email ==================

                //регулярное выражение для проверки email
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=email]');

                mail.blur(function () {
                    if (mail.val() != '') {

                        // Проверяем, если введенный email соответствует регулярному выражению
                        if (mail.val().search(pattern) == 0) {
                            // Убираем сообщение об ошибке
                            $('#valid_email_message').text('');

                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        } else {
                            //Выводим сообщение об ошибке
                            $('#valid_email_message').text('Не правильный Email');

                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);
                        }
                    } else {
                        $('#valid_email_message').text('Введите Ваш email');
                    }
                });

                //================ Проверка длины пароля ==================
                var password = $('input[name=password]');

                password.blur(function () {
                    if (password.val() != '') {

                        //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                        if (password.val().length < 6) {
                            //Выводим сообщение об ошибке
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                            // Дезактивируем кнопку отправки
                            $('input[type=submit]').attr('disabled', true);

                        } else {
                            // Убираем сообщение об ошибке
                            $('#valid_password_message').text('');

                            //Активируем кнопку отправки
                            $('input[type=submit]').attr('disabled', false);
                        }
                    } else {
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
            });
        </script>
    </head>
<body>

<div id="header">
    <div id="category_block">
        <div id="link_category1">
            <a href="/mo/index.php">Главная страница</a>
        </div>
        <div id="link_category1">
            <a href="/mo/form_category.php?category=1">Юбки</a>
        </div>


    </div>
    <div id="auth_block">
        <?php
        //Проверяем авторизован ли пользователь
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
            // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
            ?>
            <div id="link_register">
                <a href="/mo/form_register.php">Регистрация</a>
            </div>

            <div id="link_auth">
                <a href="/mo/form_auth.php">Авторизация</a>
            </div>
            <?php
        } else {
            //Если пользователь авторизован, то выводим ссылку Выход
            ?>
            <div id="link_add_product">
                <a href="/mo/form_add_product.php">Добавить товар</a>
            </div>
            <div id="link_logout">
                <a href="/mo/logout.php">Выход</a>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="clear"></div>
</div>

<?php
const CATEGORIES = [
    1 => "Юбки",
    2 => "Пиджаки",
    3 => "Брюки",
    4 => "Аксессуары",
    5 => "Кофты",
    6 => "Верхняя одежда"
];