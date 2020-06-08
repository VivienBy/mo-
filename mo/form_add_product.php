<?php
require_once("header.php");

const CATEGORIES = [
    1 => "Юбки",
    2 => "Пиджаки",
    3 => "Брюки",
    4 => "Аксессуары",
    5 => "Кофты",
    6 => "Верхняя одежда"
];

function drawMessages() {
    if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
        echo $_SESSION["error_messages"];
    }

    if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
        echo $_SESSION["success_messages"];
    }
    unset($_SESSION["error_messages"]);
    unset($_SESSION["success_messages"]);
}


?>
<div class="block_for_messages">
    <?php
    drawMessages();
    ?>
</div>
<div class="container pretty_form">
    <div>
        <form action="add_product.php" method="post">
            <label>Название товара
                <input type="text" name="name" required>
            </label>
            <label>Ссылка на фотографию
                <input type="text" name="photo" required>
            </label>
            <label>Количество товара
                <input type="number" name="count" required>
            </label>
            <label>Категория
                <select name="category" required>
                    <?php
                    foreach(CATEGORIES as $id => $name) {
                        ?>
                        <option value="<?= $id ?>"><?= $name ?></option>
                        <?php
                    }
                    ?>
                </select>
            </label>
            <button>Добавить</button>
        </form>
    </div>
</div>
