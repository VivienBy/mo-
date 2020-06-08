<?php

require 'connect.php';

function checkRequiredParams() {
    session_start();
    if(empty($_POST)) {
        die("Неверный запрос, <a href='/mo'>на главную</a>");
    }
    $requiredFields = ["name", "count", "category", "photo"];
    foreach($requiredFields as $field) {
        if(!isset($_POST[$field]) || trim($_POST[$field]) == "") {
            setErrorStatus("Заполните поле " . $field);
        }
    }
}

function makeQuery() {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $count = $_POST['count'];
    $category = $_POST['category'];
    return "INSERT INTO tovar(name, photo, count, category) VALUE ('$name','$photo',$count,$category)";
}

function setErrorStatus($error) {
    $_SESSION["error_messages"] .= "<p class='mesage_error'>" . $error . "</p>";
    header("Location: form_add_product.php");
    exit();
}

checkRequiredParams();
$res = $mysqli->query(makeQuery());
if(!$res) {
    setErrorStatus("Не удалось добавить продукт, ошибка базы данных");
} else {
    $_SESSION["success_messages"] = "<p class='success_message'>Товар " . $_POST['name'] . " успешно добавлен</p>";
    header("Location: form_add_product.php");
}
