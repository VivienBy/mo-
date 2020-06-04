<?php 
require 'connect.php';
?>
<!DOCTYPE html>
<html lang = "ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>1</title>
</head>
<body>
<?php
//$id = trim($_REQUEST['id']);
$post_id = trim($_REQUEST['post_id']);
$user_id = trim($_REQUEST['user_id']);
$text = trim($_REQUEST['text']);

echo "<p>Запись сделана в базу!</p>";
$insert_sql = "INSERT INTO comments (post_id, user_id, text) VALUES ('$post_id' , '$user_id', '$text');";
mysqli_query($mysqli, $insert_sql);
echo "<p>Вы прокомментировали публикацию!</p>";
?>

</body>
</html>