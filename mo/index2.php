<?php
require "connect.php";
require_once("header.php");
$id = $_GET["id"] ?? null;
if(is_null($id))
    die("Не передан идентификатор товара");
$query = "SELECT * FROM tovar WHERE id=" . $id;
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli));
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Player</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div id="commentBlock">
    <img src="<?= $data["photo"] ?>" alt="">
    <a name="com"></a>
    <p>Оставить комментарий</p>
    <form action="addcomment.php" method="post">
        <div id="createComment">
            <textarea type="text" placeholder="Введите комментарий" name="message" id="textCreateComment"></textarea>
            <button type="submit" id="sendComment">Отправить</button>
        </div>
    </form>
    <hr id="betweenCom"/>
    <p>Комментарии</p>
    <br/>
    <div id="commentsList">
        <?php
        $query = "SELECT * FROM comment";
        $result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($link));
        if($result) {
            $rows = mysqli_num_rows($result);

            echo "<table><tr><th align='left'>Время</th><th align='left'>Комментарий</th></tr> ";
            for($i = 0; $i < $rows; ++$i) {

                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for($j = 1; $j < 4; ++$j) {
                    if($j == 3) echo "$row[$j]</td>"; else if($j == 2) echo "<td align='left'>$row[$j]    <hr/><form action ='sendlike.php' method='post'><input class='like' name='likes$i' type='submit' value = '❤'/></form>"; else echo "<td>$row[$j]</td>";; /* if (!isset($_POST['likes$i'])) die('Не передано имя');*/


                }

                echo "</tr>";
            }
            echo "</table>";

        }
        ?>

    </div>
</div>
</div>

<script type="text/javascript" src="player.js"></script>
<script type="text/javascript" src="slider.js"></script>
<!-- <script type="text/javascript" src="comments.js"></script> -->

</body>
</html>